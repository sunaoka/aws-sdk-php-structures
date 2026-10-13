<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'stop'|'length' $stopReason
 * @property list<int> $tokens
 * @property list<double>|null $logprobs
 * @property SampleTokenUsage|null $tokenUsage
 */
class SampledSequence extends Shape
{
    /**
     * @param array{
     *     stopReason: 'stop'|'length',
     *     tokens: list<int>,
     *     logprobs?: list<double>|null,
     *     tokenUsage?: SampleTokenUsage|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
