<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalSourcesRetrieveAndGenerateConfiguration|null $externalSourcesConfiguration
 * @property KnowledgeBaseRetrieveAndGenerateConfiguration|null $knowledgeBaseConfiguration
 * @property 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES' $type
 */
class RetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     externalSourcesConfiguration?: ExternalSourcesRetrieveAndGenerateConfiguration|null,
     *     knowledgeBaseConfiguration?: KnowledgeBaseRetrieveAndGenerateConfiguration|null,
     *     type: 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
