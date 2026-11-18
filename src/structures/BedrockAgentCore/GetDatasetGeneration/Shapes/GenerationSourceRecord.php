<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TraceGenerationRecord|null $traceGeneration
 */
class GenerationSourceRecord extends Shape
{
    /**
     * @param array{traceGeneration?: TraceGenerationRecord|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
