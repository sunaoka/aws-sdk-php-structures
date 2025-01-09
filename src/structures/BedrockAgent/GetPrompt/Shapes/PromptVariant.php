<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $additionalModelRequestFields
 * @property PromptGenAiResource $genAiResource
 * @property PromptInferenceConfiguration $inferenceConfiguration
 * @property list<PromptMetadataEntry> $metadata
 * @property string $modelId
 * @property string $name
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT'|'CHAT' $templateType
 */
class PromptVariant extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: Document,
     *     genAiResource?: PromptGenAiResource,
     *     inferenceConfiguration?: PromptInferenceConfiguration,
     *     metadata?: list<PromptMetadataEntry>,
     *     modelId?: string,
     *     name: string,
     *     templateConfiguration: PromptTemplateConfiguration,
     *     templateType: 'TEXT'|'CHAT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
