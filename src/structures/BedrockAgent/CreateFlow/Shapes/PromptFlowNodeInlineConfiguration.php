<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $additionalModelRequestFields
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property string $modelId
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT'|'CHAT' $templateType
 */
class PromptFlowNodeInlineConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: Document|null,
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     modelId: string,
     *     templateConfiguration: PromptTemplateConfiguration,
     *     templateType: 'TEXT'|'CHAT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
