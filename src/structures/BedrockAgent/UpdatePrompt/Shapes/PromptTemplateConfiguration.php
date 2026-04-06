<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextPromptTemplateConfiguration|null $text
 */
class PromptTemplateConfiguration extends Shape
{
    /**
     * @param array{text?: TextPromptTemplateConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
