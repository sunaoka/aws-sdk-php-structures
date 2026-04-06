<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT'|'CHAT' $templateType
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property string $modelId
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property Document|null $additionalModelRequestFields
 */
class PromptFlowNodeInlineConfiguration extends Shape
{
    /**
     * @param array{
     *     templateType: 'TEXT'|'CHAT',
     *     templateConfiguration: PromptTemplateConfiguration,
     *     modelId: string,
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     additionalModelRequestFields?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
