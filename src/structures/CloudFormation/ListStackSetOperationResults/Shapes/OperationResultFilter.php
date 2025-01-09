<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPERATION_RESULT_STATUS' $Name
 * @property string $Values
 */
class OperationResultFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'OPERATION_RESULT_STATUS',
     *     Values?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
