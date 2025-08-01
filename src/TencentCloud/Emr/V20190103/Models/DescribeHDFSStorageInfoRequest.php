<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHDFSStorageInfo请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getStartTime() 获取获取查询信息开始时间 (s)
 * @method void setStartTime(integer $StartTime) 设置获取查询信息开始时间 (s)
 * @method integer getEndTime() 获取获取查询信息结束时间 (s)
 * @method void setEndTime(integer $EndTime) 设置获取查询信息结束时间 (s)
 */
class DescribeHDFSStorageInfoRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 获取查询信息开始时间 (s)
     */
    public $StartTime;

    /**
     * @var integer 获取查询信息结束时间 (s)
     */
    public $EndTime;

    /**
     * @param string $InstanceId 集群id
     * @param integer $StartTime 获取查询信息开始时间 (s)
     * @param integer $EndTime 获取查询信息结束时间 (s)
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
