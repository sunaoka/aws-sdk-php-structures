<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $textPromptTemplate
 */
class KnowledgeBasePromptTemplate extends Shape
{
    /**
     * @param array{textPromptTemplate?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
