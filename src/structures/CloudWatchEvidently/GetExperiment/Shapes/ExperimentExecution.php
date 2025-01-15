<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endedTime
 * @property \Aws\Api\DateTimeResult|null $startedTime
 */
class ExperimentExecution extends Shape
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
