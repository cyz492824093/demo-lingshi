<?php

namespace app\api\model;

use think\Model;

class Banner extends BaseModel
{
    public function items()//关联函数
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');//'id'指的是当前模型banner的主键id
    }
    //

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
        $banner = self::with(['items','items.img'])
            ->find($id);

//         $banner = BannerModel::relation('items,items.img')
//             ->find($id);
        return $banner;
    }
}
