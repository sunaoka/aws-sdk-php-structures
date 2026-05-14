<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAdvancedPromptOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property InferenceConfiguration|null $inferenceConfig
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 */
class ModelConfiguration extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     inferenceConfig?: InferenceConfiguration|null,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
