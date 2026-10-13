<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SampleConfig|null $sample
 * @property ComputeLogprobsConfig|null $computeLogprobs
 * @property LoadWeightsForSamplingConfig|null $loadWeightsForSampling
 */
class SampleOperationConfig extends Shape
{
    /**
     * @param array{
     *     sample?: SampleConfig|null,
     *     computeLogprobs?: ComputeLogprobsConfig|null,
     *     loadWeightsForSampling?: LoadWeightsForSamplingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
