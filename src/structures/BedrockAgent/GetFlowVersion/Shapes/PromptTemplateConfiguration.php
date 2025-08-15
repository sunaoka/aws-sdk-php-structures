<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextPromptTemplateConfiguration|null $text
 * @property ChatPromptTemplateConfiguration|null $chat
 */
class PromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     text?: TextPromptTemplateConfiguration|null,
     *     chat?: ChatPromptTemplateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
