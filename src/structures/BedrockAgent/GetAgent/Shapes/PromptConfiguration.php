<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $basePromptTemplate
 * @property string $foundationModel
 * @property InferenceConfiguration $inferenceConfiguration
 * @property 'DEFAULT'|'OVERRIDDEN' $parserMode
 * @property 'DEFAULT'|'OVERRIDDEN' $promptCreationMode
 * @property 'ENABLED'|'DISABLED' $promptState
 * @property 'PRE_PROCESSING'|'ORCHESTRATION'|'POST_PROCESSING'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'MEMORY_SUMMARIZATION' $promptType
 */
class PromptConfiguration extends Shape
{
    /**
     * @param array{
     *     basePromptTemplate?: string,
     *     foundationModel?: string,
     *     inferenceConfiguration?: InferenceConfiguration,
     *     parserMode?: 'DEFAULT'|'OVERRIDDEN',
     *     promptCreationMode?: 'DEFAULT'|'OVERRIDDEN',
     *     promptState?: 'ENABLED'|'DISABLED',
     *     promptType?: 'PRE_PROCESSING'|'ORCHESTRATION'|'POST_PROCESSING'|'KNOWLEDGE_BASE_RESPONSE_GENERATION'|'MEMORY_SUMMARIZATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
