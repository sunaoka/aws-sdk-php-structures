<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $creationTime
 * @property int<0, max> $completionTime
 */
class ExportTaskExecutionInfo extends Shape
{
    /**
     * @param array{
     *     creationTime?: int<0, max>,
     *     completionTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
