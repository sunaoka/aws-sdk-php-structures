<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property 'DEFAULT'|'NODE_TYPE_SPECIFIC' $ParameterType
 * @property string $ParameterValue
 * @property list<NodeTypeSpecificValue> $NodeTypeSpecificValues
 * @property string $Description
 * @property string $Source
 * @property string $DataType
 * @property string $AllowedValues
 * @property 'TRUE'|'FALSE'|'CONDITIONAL' $IsModifiable
 * @property 'IMMEDIATE'|'REQUIRES_REBOOT' $ChangeType
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string,
     *     ParameterType?: 'DEFAULT'|'NODE_TYPE_SPECIFIC',
     *     ParameterValue?: string,
     *     NodeTypeSpecificValues?: list<NodeTypeSpecificValue>,
     *     Description?: string,
     *     Source?: string,
     *     DataType?: string,
     *     AllowedValues?: string,
     *     IsModifiable?: 'TRUE'|'FALSE'|'CONDITIONAL',
     *     ChangeType?: 'IMMEDIATE'|'REQUIRES_REBOOT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
