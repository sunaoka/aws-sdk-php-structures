<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'|null $promptType
 * @property 'DEFAULT'|'OVERRIDDEN'|null $promptCreationMode
 * @property 'ENABLED'|'DISABLED'|null $promptState
 * @property string|null $basePromptTemplate
 * @property InferenceConfiguration|null $inferenceConfiguration
 * @property 'DEFAULT'|'OVERRIDDEN'|null $parserMode
 * @property string|null $foundationModel
 * @property Document|null $additionalModelRequestFields
 */
class PromptConfiguration extends Shape
{
    /**
     * @param array{
     *     promptType?: 'PRE_PROCESSING'|'ORCHESTRATION'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'POST_PROCESSING'|'ROUTING_CLASSIFIER'|null,
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     promptState?: 'ENABLED'|'DISABLED'|null,
     *     basePromptTemplate?: string|null,
     *     inferenceConfiguration?: InferenceConfiguration|null,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     foundationModel?: string|null,
     *     additionalModelRequestFields?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
