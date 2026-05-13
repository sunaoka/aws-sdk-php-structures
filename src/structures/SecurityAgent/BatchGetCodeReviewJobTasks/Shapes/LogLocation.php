<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUDWATCH'|null $logType
 * @property CloudWatchLog|null $cloudWatchLog
 */
class LogLocation extends Shape
{
    /**
     * @param array{
     *     logType?: 'CLOUDWATCH'|null,
     *     cloudWatchLog?: CloudWatchLog|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
