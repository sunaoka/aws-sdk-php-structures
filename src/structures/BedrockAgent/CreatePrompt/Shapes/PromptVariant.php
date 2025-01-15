<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $additionalModelRequestFields
 * @property PromptGenAiResource|null $genAiResource
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property list<PromptMetadataEntry>|null $metadata
 * @property string|null $modelId
 * @property string $name
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT'|'CHAT' $templateType
 */
class PromptVariant extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: Document|null,
     *     genAiResource?: PromptGenAiResource|null,
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     metadata?: list<PromptMetadataEntry>|null,
     *     modelId?: string|null,
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
