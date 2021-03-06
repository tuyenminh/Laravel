<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    public $menuService;
    public function __construct(MenuService $menuService) {
        $this->menuService = $menuService;
    }

    public function create() {
        return view('admin.menu.add', [
            'title' => 'Thêm danh mục mới',
            'menus' => $this->menuService->getParent()
        ]);
    }
    public function store(CreateFormRequest $request){
    $this->menuService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.menu.list', [
            'title' => 'Danh sách Danh mục mới nhất',
            'menus' => $this->menuService->getAll()
        ]);
    }
}
