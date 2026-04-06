<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $foundationModel
 * @property InferenceConfiguration|null $inferenceConfiguration
 * @property string|null $overrideLambda
 * @property 'DEFAULT'|'OVERRIDDEN'|null $parserMode
 * @property 'DEFAULT'|'OVERRIDDEN'|null $promptCreationMode
 * @property string|null $text
 * @property string|null $traceId
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'|null $type
 */
class ModelInvocationInput extends Shape
{
    /**
     * @param array{
     *     foundationModel?: string|null,
     *     inferenceConfiguration?: InferenceConfiguration|null,
     *     overrideLambda?: string|null,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     text?: string|null,
     *     traceId?: string|null,
     *     type?: 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
