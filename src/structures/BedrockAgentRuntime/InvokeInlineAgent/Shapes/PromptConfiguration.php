<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $basePromptTemplate
 * @property InferenceConfiguration $inferenceConfiguration
 * @property 'DEFAULT'|'OVERRIDDEN' $parserMode
 * @property 'DEFAULT'|'OVERRIDDEN' $promptCreationMode
 * @property 'ENABLED'|'DISABLED' $promptState
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER' $promptType
 */
class PromptConfiguration extends Shape
{
    /**
     * @param array{
     *     basePromptTemplate?: string,
     *     inferenceConfiguration?: InferenceConfiguration,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN',
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN',
     *     promptState?: 'ENABLED'|'DISABLED',
     *     promptType?: 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
