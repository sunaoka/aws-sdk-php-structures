<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBasePromptTemplate|null $promptTemplate
 * @property PromptInferenceConfiguration|null $inferenceConfig
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property PerformanceConfiguration|null $performanceConfig
 */
class KnowledgeBaseOrchestrationConfiguration extends Shape
{
    /**
     * @param array{
     *     promptTemplate?: KnowledgeBasePromptTemplate|null,
     *     inferenceConfig?: PromptInferenceConfiguration|null,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     performanceConfig?: PerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
