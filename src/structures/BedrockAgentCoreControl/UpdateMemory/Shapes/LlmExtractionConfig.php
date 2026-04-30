<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $llmExtractionInstruction
 * @property string $definition
 * @property Validation|null $validation
 */
class LlmExtractionConfig extends Shape
{
    /**
     * @param array{
     *     llmExtractionInstruction?: string|null,
     *     definition: string,
     *     validation?: Validation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
