<?php

namespace HexGad\Pages\Http\Controllers;

use HexGad\Pages\Models\Page;
use HexGad\Pages\Http\DataTables\PagesDataTable;
use HexGad\Pages\Http\Requests\StorePagesRequest;
use HexGad\Pages\Http\Requests\UpdatePagesRequest;
use App\Exceptions\ApiException;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param PagesDataTable $datatable
     * @return Renderable|JsonResponse
     */
    public function index(PagesDataTable $datatable): Renderable|JsonResponse
    {
        return $datatable->render('pages::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('pages::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePagesRequest $request
     *
     * @return JsonResponse
     * @throws ApiException
     */
    public function store(StorePagesRequest $request): JsonResponse
    {
        if($page = Page::create($request->validated()))
            return response()->json($page);

        throw new ApiException;
    }

    /**
     * Show the specified resource.
     *
     * @param Page $page
     *
     * @return Renderable
     */
    public function show(Page $page): Renderable
    {
        return view('pages::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     *
     * @return Renderable
     */
    public function edit(Page $page): Renderable
    {
        return view('pages::edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePagesRequest $request
     * @param Page $page
     *
     * @return JsonResponse
     * @throws ApiException
     */
    public function update(UpdatePagesRequest $request, Page $page): JsonResponse
    {
        if($page->update($request->validated()))
            return response()->json($page);

        throw new ApiException;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     *
     * @return JsonResponse
     * @throws ApiException
     */
    public function destroy(Page $page): JsonResponse
    {
        if($page->delete())
            return response()->json($page);

        throw new ApiException;
    }
}
