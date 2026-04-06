<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptInferenceConfiguration|null $inferenceConfiguration
 * @property string|null $modelId
 * @property string $name
 * @property PromptTemplateConfiguration|null $templateConfiguration
 * @property 'TEXT' $templateType
 */
class PromptVariant extends Shape
{
    /**
     * @param array{
     *     inferenceConfiguration?: PromptInferenceConfiguration|null,
     *     modelId?: string|null,
     *     name: string,
     *     templateConfiguration?: PromptTemplateConfiguration|null,
     *     templateType: 'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
