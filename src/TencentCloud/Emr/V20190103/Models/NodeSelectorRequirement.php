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
 * Pod节点选择项
 *
 * @method string getKey() 获取节点选择项Key值
 * @method void setKey(string $Key) 设置节点选择项Key值
 * @method string getOperator() 获取节点选择项Operator值，支持In, NotIn, Exists, DoesNotExist. Gt, and Lt.
 * @method void setOperator(string $Operator) 设置节点选择项Operator值，支持In, NotIn, Exists, DoesNotExist. Gt, and Lt.
 * @method array getValues() 获取节点选择项Values值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置节点选择项Values值
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeSelectorRequirement extends AbstractModel
{
    /**
     * @var string 节点选择项Key值
     */
    public $Key;

    /**
     * @var string 节点选择项Operator值，支持In, NotIn, Exists, DoesNotExist. Gt, and Lt.
     */
    public $Operator;

    /**
     * @var array 节点选择项Values值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Key 节点选择项Key值
     * @param string $Operator 节点选择项Operator值，支持In, NotIn, Exists, DoesNotExist. Gt, and Lt.
     * @param array $Values 节点选择项Values值
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
