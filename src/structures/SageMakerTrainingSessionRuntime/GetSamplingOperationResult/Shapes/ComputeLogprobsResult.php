<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $logprobs
 */
class ComputeLogprobsResult extends Shape
{
    /**
     * @param array{logprobs: list<double>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
