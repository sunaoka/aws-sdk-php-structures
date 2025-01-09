<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string $ParameterValue
 * @property string $Description
 * @property string $Source
 * @property string $DataType
 * @property string $AllowedValues
 * @property bool $IsModifiable
 * @property string $MinimumEngineVersion
 * @property 'immediate'|'requires-reboot' $ChangeType
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string,
     *     ParameterValue?: string,
     *     Description?: string,
     *     Source?: string,
     *     DataType?: string,
     *     AllowedValues?: string,
     *     IsModifiable?: bool,
     *     MinimumEngineVersion?: string,
     *     ChangeType?: 'immediate'|'requires-reboot'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
