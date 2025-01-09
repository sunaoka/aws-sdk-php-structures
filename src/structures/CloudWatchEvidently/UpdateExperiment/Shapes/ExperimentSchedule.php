<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $analysisCompleteTime
 */
class ExperimentSchedule extends Shape
{
    /**
     * @param array{analysisCompleteTime?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
