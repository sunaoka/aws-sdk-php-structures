<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $additionalModelRequestFields
 * @property string|null $basePromptTemplate
 * @property string|null $foundationModel
 * @property InferenceConfiguration|null $inferenceConfiguration
 * @property 'DEFAULT'|'OVERRIDDEN'|null $parserMode
 * @property 'DEFAULT'|'OVERRIDDEN'|null $promptCreationMode
 * @property 'ENABLED'|'DISABLED'|null $promptState
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'POST_PROCESSING'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'MEMORY_SUMMARIZATION'|null $promptType
 */
class PromptConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: Document|null,
     *     basePromptTemplate?: string|null,
     *     foundationModel?: string|null,
     *     inferenceConfiguration?: InferenceConfiguration|null,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN'|null,
     *     promptState?: 'ENABLED'|'DISABLED'|null,
     *     promptType?: 'PRE_PROCESSING'|'ORCHESTRATION'|'POST_PROCESSING'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'MEMORY_SUMMARIZATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
