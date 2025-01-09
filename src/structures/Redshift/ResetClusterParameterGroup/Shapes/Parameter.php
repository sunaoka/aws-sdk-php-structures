<?php

namespace Sunaoka\Aws\Structures\Redshift\ResetClusterParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string $ParameterValue
 * @property string $Description
 * @property string $Source
 * @property string $DataType
 * @property string $AllowedValues
 * @property 'static'|'dynamic' $ApplyType
 * @property bool $IsModifiable
 * @property string $MinimumEngineVersion
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
     *     ApplyType?: 'static'|'dynamic',
     *     IsModifiable?: bool,
     *     MinimumEngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
