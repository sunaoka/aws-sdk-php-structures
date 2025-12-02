<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property InferenceConfig|null $inferenceConfig
 * @property PerformanceConfiguration|null $performanceConfig
 * @property PromptTemplate|null $promptTemplate
 * @property QueryTransformationConfiguration|null $queryTransformationConfiguration
 */
class OrchestrationConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     inferenceConfig?: InferenceConfig|null,
     *     performanceConfig?: PerformanceConfiguration|null,
     *     promptTemplate?: PromptTemplate|null,
     *     queryTransformationConfiguration?: QueryTransformationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
