<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ErrorInfo|null $errorInfo
 * @property int|null $bytesProcessed
 * @property int|null $bytesWritten
 * @property int|null $recordsProcessed
 */
class ExecutionResult extends Shape
{
    /**
     * @param array{
     *     errorInfo?: ErrorInfo|null,
     *     bytesProcessed?: int|null,
     *     bytesWritten?: int|null,
     *     recordsProcessed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
