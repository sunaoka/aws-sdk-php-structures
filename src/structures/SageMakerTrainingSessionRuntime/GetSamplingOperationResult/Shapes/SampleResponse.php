<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SampledSequence> $sequences
 * @property list<double>|null $promptLogprobs
 * @property list<list<TokenLogprob>>|null $topkPromptLogprobs
 */
class SampleResponse extends Shape
{
    /**
     * @param array{
     *     sequences: list<SampledSequence>,
     *     promptLogprobs?: list<double>|null,
     *     topkPromptLogprobs?: list<list<TokenLogprob>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
