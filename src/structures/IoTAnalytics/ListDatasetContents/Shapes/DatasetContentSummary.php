<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasetContents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property DatasetContentStatus|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $scheduleTime
 * @property \Aws\Api\DateTimeResult|null $completionTime
 */
class DatasetContentSummary extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     status?: DatasetContentStatus|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     scheduleTime?: \Aws\Api\DateTimeResult|null,
     *     completionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
