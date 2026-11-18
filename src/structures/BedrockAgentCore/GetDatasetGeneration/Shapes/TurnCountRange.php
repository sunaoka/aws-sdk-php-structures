<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $min
 * @property int<1, 100>|null $max
 */
class TurnCountRange extends Shape
{
    /**
     * @param array{
     *     min?: int<1, 100>|null,
     *     max?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
