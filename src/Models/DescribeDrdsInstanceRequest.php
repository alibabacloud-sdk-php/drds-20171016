<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example drdshbga33pe****
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
