<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $foundationModel
 * @property InferenceConfiguration $inferenceConfiguration
 * @property string $overrideLambda
 * @property 'DEFAULT'|'OVERRIDDEN' $parserMode
 * @property 'DEFAULT'|'OVERRIDDEN' $promptCreationMode
 * @property string $text
 * @property string $traceId
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER' $type
 */
class ModelInvocationInput extends Shape
{
    /**
     * @param array{
     *     foundationModel?: string,
     *     inferenceConfiguration?: InferenceConfiguration,
     *     overrideLambda?: string,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN',
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN',
     *     text?: string,
     *     traceId?: string,
     *     type?: 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
