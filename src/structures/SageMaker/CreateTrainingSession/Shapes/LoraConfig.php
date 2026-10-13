<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 256> $Rank
 * @property int<1, max> $Alpha
 */
class LoraConfig extends Shape
{
    /**
     * @param array{
     *     Rank: int<1, 256>,
     *     Alpha: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
