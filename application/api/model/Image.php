<?php

namespace app\api\model;

use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['delete_time', 'id', 'from'];

    public function getUrlAttr($value, $data)//读取器，在此次操作中如果遇到url对字段url单独处理，$value是url的值，data是这条数据的值
        //类似一个小型aop遇到url就进来然后 对数据进行处理过滤。
    {
        return $this->prefixImgUrl($value, $data);
    }
}

