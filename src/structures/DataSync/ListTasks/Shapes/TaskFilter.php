<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LocationId'|'CreationTime' $Name
 * @property list<string> $Values
 * @property 'Equals'|'NotEquals'|'In'|'LessThanOrEqual'|'LessThan'|'GreaterThanOrEqual'|'GreaterThan'|'Contains'|'NotContains'|'BeginsWith' $Operator
 */
class TaskFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'LocationId'|'CreationTime',
     *     Values: list<string>,
     *     Operator: 'Equals'|'NotEquals'|'In'|'LessThanOrEqual'|'LessThan'|'GreaterThanOrEqual'|'GreaterThan'|'Contains'|'NotContains'|'BeginsWith'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
