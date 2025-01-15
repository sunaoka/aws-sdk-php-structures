<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property string|null $result
 * @property 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'|null $status
 */
class RegistrationOutput extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     result?: string|null,
     *     status?: 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
