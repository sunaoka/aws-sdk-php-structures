<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property InferenceConfiguration|null $inferenceConfig
 * @property AdditionalModelRequestFields|null $additionalModelRequestFields
 */
class BedrockEvaluatorModelConfig extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     inferenceConfig?: InferenceConfiguration|null,
     *     additionalModelRequestFields?: AdditionalModelRequestFields|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
