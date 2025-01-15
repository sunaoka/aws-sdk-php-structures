<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxNumberOfTrainingJobs
 * @property int<1, max> $MaxParallelTrainingJobs
 * @property int<120, 15768000>|null $MaxRuntimeInSeconds
 */
class ResourceLimits extends Shape
{
    /**
     * @param array{
     *     MaxNumberOfTrainingJobs?: int<1, max>|null,
     *     MaxParallelTrainingJobs: int<1, max>,
     *     MaxRuntimeInSeconds?: int<120, 15768000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
