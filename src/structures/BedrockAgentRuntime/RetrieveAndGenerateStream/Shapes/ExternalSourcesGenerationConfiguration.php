<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property InferenceConfig|null $inferenceConfig
 * @property PerformanceConfiguration|null $performanceConfig
 * @property PromptTemplate|null $promptTemplate
 */
class ExternalSourcesGenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     inferenceConfig?: InferenceConfig|null,
     *     performanceConfig?: PerformanceConfiguration|null,
     *     promptTemplate?: PromptTemplate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
