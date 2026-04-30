<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LlmExtractionConfig|null $llmExtractionConfig
 */
class ExtractionConfig extends Shape
{
    /**
     * @param array{llmExtractionConfig?: LlmExtractionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
