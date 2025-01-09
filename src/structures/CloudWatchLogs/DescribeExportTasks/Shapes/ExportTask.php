<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string $taskName
 * @property string $logGroupName
 * @property int<0, max> $from
 * @property int<0, max> $to
 * @property string $destination
 * @property string $destinationPrefix
 * @property ExportTaskStatus $status
 * @property ExportTaskExecutionInfo $executionInfo
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     taskName?: string,
     *     logGroupName?: string,
     *     from?: int<0, max>,
     *     to?: int<0, max>,
     *     destination?: string,
     *     destinationPrefix?: string,
     *     status?: ExportTaskStatus,
     *     executionInfo?: ExportTaskExecutionInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
