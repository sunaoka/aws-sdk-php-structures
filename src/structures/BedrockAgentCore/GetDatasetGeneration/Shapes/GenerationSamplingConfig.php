<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $maxScenarios
 */
class GenerationSamplingConfig extends Shape
{
    /**
     * @param array{maxScenarios?: int<1, 1000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
