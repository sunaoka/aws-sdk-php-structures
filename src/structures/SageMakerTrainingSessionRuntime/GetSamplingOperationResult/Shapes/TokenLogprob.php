<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $tokenId
 * @property double $logprob
 */
class TokenLogprob extends Shape
{
    /**
     * @param array{
     *     tokenId: int,
     *     logprob: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
