<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/16
 * Time: 10:01
 * Comment: 基础控制器
 */

namespace app\admin\controller;

use think\Controller;

class BasisController extends Controller {

    public function returnMessage($code = 200, $message = '', $data = []) {
        if (empty($data) || is_null($data)) {
            return json([
                'code'      => $code,
                'message'   => $message
            ]);
        } else {
            return json([
                'code'      => $code,
                'message'   => $message,
                'data'      => $data
            ]);
        }
    }
}