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
 * 操作范围
 *
 * @method array getServiceInfoList() 获取操作范围，要操作的服务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInfoList(array $ServiceInfoList) 设置操作范围，要操作的服务信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpScope extends AbstractModel
{
    /**
     * @var array 操作范围，要操作的服务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInfoList;

    /**
     * @param array $ServiceInfoList 操作范围，要操作的服务信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ServiceInfoList",$param) and $param["ServiceInfoList"] !== null) {
            $this->ServiceInfoList = [];
            foreach ($param["ServiceInfoList"] as $key => $value){
                $obj = new ServiceBasicRestartInfo();
                $obj->deserialize($value);
                array_push($this->ServiceInfoList, $obj);
            }
        }
    }
}
