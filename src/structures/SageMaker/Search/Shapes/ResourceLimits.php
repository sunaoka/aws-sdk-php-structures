<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxNumberOfTrainingJobs
 * @property int<1, max> $MaxParallelTrainingJobs
 * @property int<120, 15768000> $MaxRuntimeInSeconds
 */
class ResourceLimits extends Shape
{
    /**
     * @param array{
     *     MaxNumberOfTrainingJobs?: int<1, max>,
     *     MaxParallelTrainingJobs: int<1, max>,
     *     MaxRuntimeInSeconds?: int<120, 15768000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
