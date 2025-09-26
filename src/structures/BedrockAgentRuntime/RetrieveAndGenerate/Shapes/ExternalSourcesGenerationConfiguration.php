<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptTemplate|null $promptTemplate
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property InferenceConfig|null $inferenceConfig
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property PerformanceConfiguration|null $performanceConfig
 */
class ExternalSourcesGenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     promptTemplate?: PromptTemplate|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     inferenceConfig?: InferenceConfig|null,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     performanceConfig?: PerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
