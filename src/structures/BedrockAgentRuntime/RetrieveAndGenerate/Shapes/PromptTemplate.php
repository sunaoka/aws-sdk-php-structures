<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $textPromptTemplate
 */
class PromptTemplate extends Shape
{
    /**
     * @param array{textPromptTemplate?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
