<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<512, 131072> $maxTokens
 * @property double|null $temperature
 * @property int|null $topK
 * @property double|null $topP
 * @property int|null $seed
 * @property list<string>|null $stop
 */
class SamplingParams extends Shape
{
    /**
     * @param array{
     *     maxTokens: int<512, 131072>,
     *     temperature?: double|null,
     *     topK?: int|null,
     *     topP?: double|null,
     *     seed?: int|null,
     *     stop?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
