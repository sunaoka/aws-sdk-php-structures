<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endedTime
 * @property \Aws\Api\DateTimeResult|null $startedTime
 */
class LaunchExecution extends Shape
{
    /**
     * @param array{
     *     endedTime?: \Aws\Api\DateTimeResult|null,
     *     startedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
