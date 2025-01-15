<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPERATION_RESULT_STATUS'|null $Name
 * @property string|null $Values
 */
class OperationResultFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'OPERATION_RESULT_STATUS'|null,
     *     Values?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
