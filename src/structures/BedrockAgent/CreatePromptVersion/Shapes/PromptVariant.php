<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'TEXT'|'CHAT' $templateType
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property string|null $modelId
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property list<PromptMetadataEntry>|null $metadata
 * @property Document|null $additionalModelRequestFields
 * @property PromptGenAiResource|null $genAiResource
 */
class PromptVariant extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     templateType: 'TEXT'|'CHAT',
     *     templateConfiguration: PromptTemplateConfiguration,
     *     modelId?: string|null,
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     metadata?: list<PromptMetadataEntry>|null,
     *     additionalModelRequestFields?: Document|null,
     *     genAiResource?: PromptGenAiResource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
