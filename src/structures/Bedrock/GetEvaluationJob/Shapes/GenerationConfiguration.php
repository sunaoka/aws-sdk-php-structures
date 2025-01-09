<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptTemplate $promptTemplate
 * @property GuardrailConfiguration $guardrailConfiguration
 * @property KbInferenceConfig $kbInferenceConfig
 * @property array<string, AdditionalModelRequestFieldsValue> $additionalModelRequestFields
 */
class GenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     promptTemplate?: PromptTemplate,
     *     guardrailConfiguration?: GuardrailConfiguration,
     *     kbInferenceConfig?: KbInferenceConfig,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
