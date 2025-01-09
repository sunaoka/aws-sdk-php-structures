<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxNumberOfTrainingJobs
 * @property int $MaxParallelTrainingJobs
 * @property int $MaxRuntimeInSeconds
 */
class ResourceLimits extends Shape
{
    /**
     * @param array{
     *     MaxNumberOfTrainingJobs?: int,
     *     MaxParallelTrainingJobs: int,
     *     MaxRuntimeInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
