<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property KnowledgeBaseRetrievalConfiguration $knowledgeBaseRetrievalConfiguration
 */
class RetrieveConfig extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     knowledgeBaseRetrievalConfiguration: KnowledgeBaseRetrievalConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
