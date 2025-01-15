<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptTemplate|null $promptTemplate
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property KbInferenceConfig|null $kbInferenceConfig
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 */
class GenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     promptTemplate?: PromptTemplate|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     kbInferenceConfig?: KbInferenceConfig|null,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
