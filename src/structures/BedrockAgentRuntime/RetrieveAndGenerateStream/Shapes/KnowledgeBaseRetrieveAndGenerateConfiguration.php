<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GenerationConfiguration|null $generationConfiguration
 * @property string $knowledgeBaseId
 * @property string $modelArn
 * @property OrchestrationConfiguration|null $orchestrationConfiguration
 * @property KnowledgeBaseRetrievalConfiguration|null $retrievalConfiguration
 */
class KnowledgeBaseRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     generationConfiguration?: GenerationConfiguration|null,
     *     knowledgeBaseId: string,
     *     modelArn: string,
     *     orchestrationConfiguration?: OrchestrationConfiguration|null,
     *     retrievalConfiguration?: KnowledgeBaseRetrievalConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
