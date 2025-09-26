<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES' $type
 * @property KnowledgeBaseRetrieveAndGenerateConfiguration|null $knowledgeBaseConfiguration
 * @property ExternalSourcesRetrieveAndGenerateConfiguration|null $externalSourcesConfiguration
 */
class RetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'KNOWLEDGE_BASE'|'EXTERNAL_SOURCES',
     *     knowledgeBaseConfiguration?: KnowledgeBaseRetrieveAndGenerateConfiguration|null,
     *     externalSourcesConfiguration?: ExternalSourcesRetrieveAndGenerateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
