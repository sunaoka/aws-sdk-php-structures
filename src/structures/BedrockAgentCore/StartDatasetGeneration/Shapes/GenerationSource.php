<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TraceGenerationSource|null $traceGeneration
 */
class GenerationSource extends Shape
{
    /**
     * @param array{traceGeneration?: TraceGenerationSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
