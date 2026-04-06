<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property string $modelId
 * @property PromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT' $templateType
 */
class PromptFlowNodeInlineConfiguration extends Shape
{
    /**
     * @param array{
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     modelId: string,
     *     templateConfiguration: PromptTemplateConfiguration,
     *     templateType: 'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
