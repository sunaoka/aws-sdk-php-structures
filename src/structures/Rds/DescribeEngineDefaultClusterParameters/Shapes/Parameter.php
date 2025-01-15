<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEngineDefaultClusterParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property string|null $ParameterValue
 * @property string|null $Description
 * @property string|null $Source
 * @property string|null $ApplyType
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property bool|null $IsModifiable
 * @property string|null $MinimumEngineVersion
 * @property 'immediate'|'pending-reboot'|null $ApplyMethod
 * @property list<string>|null $SupportedEngineModes
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     ParameterValue?: string|null,
     *     Description?: string|null,
     *     Source?: string|null,
     *     ApplyType?: string|null,
     *     DataType?: string|null,
     *     AllowedValues?: string|null,
     *     IsModifiable?: bool|null,
     *     MinimumEngineVersion?: string|null,
     *     ApplyMethod?: 'immediate'|'pending-reboot'|null,
     *     SupportedEngineModes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
