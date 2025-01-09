<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue> $additionalModelRequestFields
 * @property GuardrailConfiguration $guardrailConfiguration
 * @property InferenceConfig $inferenceConfig
 * @property PerformanceConfiguration $performanceConfig
 * @property PromptTemplate $promptTemplate
 */
class GenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>,
     *     guardrailConfiguration?: GuardrailConfiguration,
     *     inferenceConfig?: InferenceConfig,
     *     performanceConfig?: PerformanceConfiguration,
     *     promptTemplate?: PromptTemplate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
