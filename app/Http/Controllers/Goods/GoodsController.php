<?php

namespace App\Http\Controllers\Goods;


use App\Http\Controllers\Admin\CController;
use Illuminate\Http\Request;

class GoodsController extends CController
{
    public function list(Request $request) {
        \Illuminate\Support\Facades\Log::info('enter goods controller');
        return $this->success([], '管理员账号添加成功...');
    }
}
