<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalSourcesRetrieveAndGenerateConfiguration $externalSourcesConfiguration
 * @property KnowledgeBaseRetrieveAndGenerateConfiguration $knowledgeBaseConfiguration
 * @property 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES' $type
 */
class RetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     externalSourcesConfiguration?: ExternalSourcesRetrieveAndGenerateConfiguration,
     *     knowledgeBaseConfiguration?: KnowledgeBaseRetrieveAndGenerateConfiguration,
     *     type: 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
