<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endedTime
 * @property \Aws\Api\DateTimeResult $startedTime
 */
class LaunchExecution extends Shape
{
    /**
     * @param array{
     *     endedTime?: \Aws\Api\DateTimeResult,
     *     startedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
