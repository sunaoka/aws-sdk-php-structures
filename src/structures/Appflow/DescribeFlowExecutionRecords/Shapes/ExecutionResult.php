<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ErrorInfo $errorInfo
 * @property int $bytesProcessed
 * @property int $bytesWritten
 * @property int $recordsProcessed
 * @property int $numParallelProcesses
 * @property int $maxPageSize
 */
class ExecutionResult extends Shape
{
    /**
     * @param array{
     *     errorInfo?: ErrorInfo,
     *     bytesProcessed?: int,
     *     bytesWritten?: int,
     *     recordsProcessed?: int,
     *     numParallelProcesses?: int,
     *     maxPageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
