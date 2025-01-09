<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue> $additionalModelRequestFields
 * @property InferenceConfig $inferenceConfig
 * @property PerformanceConfiguration $performanceConfig
 * @property PromptTemplate $promptTemplate
 * @property QueryTransformationConfiguration $queryTransformationConfiguration
 */
class OrchestrationConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>,
     *     inferenceConfig?: InferenceConfig,
     *     performanceConfig?: PerformanceConfiguration,
     *     promptTemplate?: PromptTemplate,
     *     queryTransformationConfiguration?: QueryTransformationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
