<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property string|null $ParameterValue
 * @property string|null $Description
 * @property string|null $Source
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property bool|null $IsModifiable
 * @property string|null $MinimumEngineVersion
 * @property 'immediate'|'requires-reboot'|null $ChangeType
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     ParameterValue?: string|null,
     *     Description?: string|null,
     *     Source?: string|null,
     *     DataType?: string|null,
     *     AllowedValues?: string|null,
     *     IsModifiable?: bool|null,
     *     MinimumEngineVersion?: string|null,
     *     ChangeType?: 'immediate'|'requires-reboot'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
