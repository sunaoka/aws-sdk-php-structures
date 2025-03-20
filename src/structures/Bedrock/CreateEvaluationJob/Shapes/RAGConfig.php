<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseConfig|null $knowledgeBaseConfig
 * @property EvaluationPrecomputedRagSourceConfig|null $precomputedRagSourceConfig
 */
class RAGConfig extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseConfig?: KnowledgeBaseConfig|null,
     *     precomputedRagSourceConfig?: EvaluationPrecomputedRagSourceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
