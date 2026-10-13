<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInput $prompt
 * @property int<1, 1000> $numSamples
 * @property SamplingParams $samplingParams
 * @property bool|null $includePromptLogprobs
 * @property int|null $topkPromptLogprobs
 * @property string|null $modelPackageArn
 */
class SampleConfig extends Shape
{
    /**
     * @param array{
     *     prompt: ModelInput,
     *     numSamples: int<1, 1000>,
     *     samplingParams: SamplingParams,
     *     includePromptLogprobs?: bool|null,
     *     topkPromptLogprobs?: int|null,
     *     modelPackageArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
