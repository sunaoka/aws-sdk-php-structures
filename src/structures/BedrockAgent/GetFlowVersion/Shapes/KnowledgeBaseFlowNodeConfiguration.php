<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string|null $modelId
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property int<1, 100>|null $numberOfResults
 * @property KnowledgeBasePromptTemplate|null $promptTemplate
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property VectorSearchRerankingConfiguration|null $rerankingConfiguration
 * @property KnowledgeBaseOrchestrationConfiguration|null $orchestrationConfiguration
 */
class KnowledgeBaseFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     modelId?: string|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     numberOfResults?: int<1, 100>|null,
     *     promptTemplate?: KnowledgeBasePromptTemplate|null,
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     rerankingConfiguration?: VectorSearchRerankingConfiguration|null,
     *     orchestrationConfiguration?: KnowledgeBaseOrchestrationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
