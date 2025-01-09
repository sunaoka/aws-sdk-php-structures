<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $additionalModelRequestFields
 * @property PromptInferenceConfiguration $inferenceConfiguration
 * @property string $modelId
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT'|'CHAT' $templateType
 */
class PromptFlowNodeInlineConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: Document,
     *     inferenceConfiguration?: PromptInferenceConfiguration,
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
