<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES' $type
 * @property KnowledgeBaseRetrieveAndGenerateConfiguration $knowledgeBaseConfiguration
 * @property ExternalSourcesRetrieveAndGenerateConfiguration $externalSourcesConfiguration
 */
class RetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES',
     *     knowledgeBaseConfiguration?: KnowledgeBaseRetrieveAndGenerateConfiguration,
     *     externalSourcesConfiguration?: ExternalSourcesRetrieveAndGenerateConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
