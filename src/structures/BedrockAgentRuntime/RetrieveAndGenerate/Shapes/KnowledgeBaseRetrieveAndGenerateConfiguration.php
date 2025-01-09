<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GenerationConfiguration $generationConfiguration
 * @property string $knowledgeBaseId
 * @property string $modelArn
 * @property OrchestrationConfiguration $orchestrationConfiguration
 * @property KnowledgeBaseRetrievalConfiguration $retrievalConfiguration
 */
class KnowledgeBaseRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     generationConfiguration?: GenerationConfiguration,
     *     knowledgeBaseId: string,
     *     modelArn: string,
     *     orchestrationConfiguration?: OrchestrationConfiguration,
     *     retrievalConfiguration?: KnowledgeBaseRetrievalConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
