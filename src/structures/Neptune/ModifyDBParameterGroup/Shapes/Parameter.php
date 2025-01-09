<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string $ParameterValue
 * @property string $Description
 * @property string $Source
 * @property string $ApplyType
 * @property string $DataType
 * @property string $AllowedValues
 * @property bool $IsModifiable
 * @property string $MinimumEngineVersion
 * @property 'immediate'|'pending-reboot' $ApplyMethod
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string,
     *     ParameterValue?: string,
     *     Description?: string,
     *     Source?: string,
     *     ApplyType?: string,
     *     DataType?: string,
     *     AllowedValues?: string,
     *     IsModifiable?: bool,
     *     MinimumEngineVersion?: string,
     *     ApplyMethod?: 'immediate'|'pending-reboot'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
