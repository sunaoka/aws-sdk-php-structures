<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property 'DEFAULT'|'NODE_TYPE_SPECIFIC'|null $ParameterType
 * @property string|null $ParameterValue
 * @property list<NodeTypeSpecificValue>|null $NodeTypeSpecificValues
 * @property string|null $Description
 * @property string|null $Source
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property 'TRUE'|'FALSE'|'CONDITIONAL'|null $IsModifiable
 * @property 'IMMEDIATE'|'REQUIRES_REBOOT'|null $ChangeType
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     ParameterType?: 'DEFAULT'|'NODE_TYPE_SPECIFIC'|null,
     *     ParameterValue?: string|null,
     *     NodeTypeSpecificValues?: list<NodeTypeSpecificValue>|null,
     *     Description?: string|null,
     *     Source?: string|null,
     *     DataType?: string|null,
     *     AllowedValues?: string|null,
     *     IsModifiable?: 'TRUE'|'FALSE'|'CONDITIONAL'|null,
     *     ChangeType?: 'IMMEDIATE'|'REQUIRES_REBOOT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
