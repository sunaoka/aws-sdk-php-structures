<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property string $knowledgeBaseId
 * @property string|null $modelId
 * @property int<1, 100>|null $numberOfResults
 * @property KnowledgeBaseOrchestrationConfiguration|null $orchestrationConfiguration
 * @property KnowledgeBasePromptTemplate|null $promptTemplate
 * @property VectorSearchRerankingConfiguration|null $rerankingConfiguration
 */
class KnowledgeBaseFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     knowledgeBaseId: string,
     *     modelId?: string|null,
     *     numberOfResults?: int<1, 100>|null,
     *     orchestrationConfiguration?: KnowledgeBaseOrchestrationConfiguration|null,
     *     promptTemplate?: KnowledgeBasePromptTemplate|null,
     *     rerankingConfiguration?: VectorSearchRerankingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
