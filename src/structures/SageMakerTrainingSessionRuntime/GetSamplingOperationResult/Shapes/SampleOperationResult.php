<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SampleResponse|null $sample
 * @property ComputeLogprobsResult|null $computeLogprobs
 * @property LoadWeightsForSamplingResult|null $loadWeightsForSampling
 */
class SampleOperationResult extends Shape
{
    /**
     * @param array{
     *     sample?: SampleResponse|null,
     *     computeLogprobs?: ComputeLogprobsResult|null,
     *     loadWeightsForSampling?: LoadWeightsForSamplingResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
