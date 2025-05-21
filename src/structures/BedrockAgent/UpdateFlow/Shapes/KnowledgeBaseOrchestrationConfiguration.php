<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property PromptInferenceConfiguration|null $inferenceConfig
 * @property PerformanceConfiguration|null $performanceConfig
 * @property KnowledgeBasePromptTemplate|null $promptTemplate
 */
class KnowledgeBaseOrchestrationConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     inferenceConfig?: PromptInferenceConfiguration|null,
     *     performanceConfig?: PerformanceConfiguration|null,
     *     promptTemplate?: KnowledgeBasePromptTemplate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
