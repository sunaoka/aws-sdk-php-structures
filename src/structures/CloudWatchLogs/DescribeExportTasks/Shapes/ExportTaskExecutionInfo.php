<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $creationTime
 * @property int $completionTime
 */
class ExportTaskExecutionInfo extends Shape
{
    /**
     * @param array{
     *     creationTime?: int,
     *     completionTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
