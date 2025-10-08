<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property string|null $text
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'|null $type
 * @property string|null $overrideLambda
 * @property 'DEFAULT'|'OVERRIDDEN'|null $promptCreationMode
 * @property InferenceConfiguration|null $inferenceConfiguration
 * @property 'DEFAULT'|'OVERRIDDEN'|null $parserMode
 * @property string|null $foundationModel
 */
class ModelInvocationInput extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     text?: string|null,
     *     type?: 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'|null,
     *     overrideLambda?: string|null,
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     inferenceConfiguration?: InferenceConfiguration|null,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     foundationModel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
