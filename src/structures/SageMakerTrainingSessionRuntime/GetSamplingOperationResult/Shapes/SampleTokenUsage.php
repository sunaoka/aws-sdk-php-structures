<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $prefill
 * @property int $decode
 */
class SampleTokenUsage extends Shape
{
    /**
     * @param array{
     *     prefill: int,
     *     decode: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
