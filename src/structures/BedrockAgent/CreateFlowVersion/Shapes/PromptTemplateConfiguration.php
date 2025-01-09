<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChatPromptTemplateConfiguration $chat
 * @property TextPromptTemplateConfiguration $text
 */
class PromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     chat?: ChatPromptTemplateConfiguration,
     *     text?: TextPromptTemplateConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
