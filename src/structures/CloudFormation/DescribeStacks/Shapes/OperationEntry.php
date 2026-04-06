<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_STACK'|'UPDATE_STACK'|'DELETE_STACK'|'CONTINUE_ROLLBACK'|'ROLLBACK'|'CREATE_CHANGESET'|null $OperationType
 * @property string|null $OperationId
 */
class OperationEntry extends Shape
{
    /**
     * @param array{
     *     OperationType?: 'CREATE_STACK'|'UPDATE_STACK'|'DELETE_STACK'|'CONTINUE_ROLLBACK'|'ROLLBACK'|'CREATE_CHANGESET'|null,
     *     OperationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
