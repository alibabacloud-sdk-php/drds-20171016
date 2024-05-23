<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceResponseBody;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceResponseBody\data\vips;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1568620311000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 111111
     *
     * @var string
     */
    public $description;

    /**
     * @example drdshbga33pe****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionId;

    /**
     * @example drds.sn1.4c8g.8C16G
     *
     * @var string
     */
    public $specification;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @example 0
     *
     * @var string
     */
    public $type;

    /**
     * @example 0
     *
     * @var int
     */
    public $version;

    /**
     * @var vips
     */
    public $vips;

    /**
     * @example oogbx6c2atj****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'description'        => 'Description',
        'drdsInstanceId'     => 'DrdsInstanceId',
        'networkType'        => 'NetworkType',
        'regionId'           => 'RegionId',
        'specification'      => 'Specification',
        'status'             => 'Status',
        'type'               => 'Type',
        'version'            => 'Version',
        'vips'               => 'Vips',
        'vpcCloudInstanceId' => 'VpcCloudInstanceId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vips) {
            $res['Vips'] = null !== $this->vips ? $this->vips->toMap() : null;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Vips'])) {
            $model->vips = vips::fromMap($map['Vips']);
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
