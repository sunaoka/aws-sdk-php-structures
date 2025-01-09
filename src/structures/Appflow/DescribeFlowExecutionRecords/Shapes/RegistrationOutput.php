<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $result
 * @property 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled' $status
 */
class RegistrationOutput extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     result?: string,
     *     status?: 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
