<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseConfig|null $knowledgeBaseConfig
 */
class RAGConfig extends Shape
{
    /**
     * @param array{knowledgeBaseConfig?: KnowledgeBaseConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
