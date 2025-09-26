<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptTemplate|null $promptTemplate
 * @property InferenceConfig|null $inferenceConfig
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property QueryTransformationConfiguration|null $queryTransformationConfiguration
 * @property PerformanceConfiguration|null $performanceConfig
 */
class OrchestrationConfiguration extends Shape
{
    /**
     * @param array{
     *     promptTemplate?: PromptTemplate|null,
     *     inferenceConfig?: InferenceConfig|null,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     queryTransformationConfiguration?: QueryTransformationConfiguration|null,
     *     performanceConfig?: PerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
