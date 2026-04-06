<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $analysisCompleteTime
 */
class ExperimentSchedule extends Shape
{
    /**
     * @param array{analysisCompleteTime?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
