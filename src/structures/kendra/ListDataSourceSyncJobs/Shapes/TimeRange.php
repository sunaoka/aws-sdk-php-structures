<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
