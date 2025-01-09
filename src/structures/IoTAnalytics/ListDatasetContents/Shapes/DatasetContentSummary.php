<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasetContents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property DatasetContentStatus $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $scheduleTime
 * @property \Aws\Api\DateTimeResult $completionTime
 */
class DatasetContentSummary extends Shape
{
    /**
     * @param array{
     *     version?: string,
     *     status?: DatasetContentStatus,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     scheduleTime?: \Aws\Api\DateTimeResult,
     *     completionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
