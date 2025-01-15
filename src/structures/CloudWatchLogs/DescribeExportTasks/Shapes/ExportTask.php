<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property string|null $taskName
 * @property string|null $logGroupName
 * @property int<0, max>|null $from
 * @property int<0, max>|null $to
 * @property string|null $destination
 * @property string|null $destinationPrefix
 * @property ExportTaskStatus|null $status
 * @property ExportTaskExecutionInfo|null $executionInfo
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     taskName?: string|null,
     *     logGroupName?: string|null,
     *     from?: int<0, max>|null,
     *     to?: int<0, max>|null,
     *     destination?: string|null,
     *     destinationPrefix?: string|null,
     *     status?: ExportTaskStatus|null,
     *     executionInfo?: ExportTaskExecutionInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
