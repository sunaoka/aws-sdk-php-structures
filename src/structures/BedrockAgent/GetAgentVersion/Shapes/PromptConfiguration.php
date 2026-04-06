<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $basePromptTemplate
 * @property InferenceConfiguration|null $inferenceConfiguration
 * @property 'DEFAULT'|'OVERRIDDEN'|null $parserMode
 * @property 'DEFAULT'|'OVERRIDDEN'|null $promptCreationMode
 * @property 'ENABLED'|'DISABLED'|null $promptState
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'POST_PROCESSING'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|null $promptType
 */
class PromptConfiguration extends Shape
{
    /**
     * @param array{
     *     basePromptTemplate?: string|null,
     *     inferenceConfiguration?: InferenceConfiguration|null,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     promptState?: 'ENABLED'|'DISABLED'|null,
     *     promptType?: 'PRE_PROCESSING'|'ORCHESTRATION'|'POST_PROCESSING'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
