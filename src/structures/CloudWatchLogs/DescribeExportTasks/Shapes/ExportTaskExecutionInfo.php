<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $completionTime
 */
class ExportTaskExecutionInfo extends Shape
{
    /**
     * @param array{
     *     creationTime?: int<0, max>|null,
     *     completionTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
