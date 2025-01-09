<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class KnowledgeBaseQuery extends Shape
{
    /**
     * @param array{text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
