<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExecutionId'|'Status'|'CreatedTime' $Key
 * @property string $Value
 * @property 'EQUAL'|'LESS_THAN'|'GREATER_THAN' $Type
 */
class AssociationExecutionFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'ExecutionId'|'Status'|'CreatedTime',
     *     Value: string,
     *     Type: 'EQUAL'|'LESS_THAN'|'GREATER_THAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
