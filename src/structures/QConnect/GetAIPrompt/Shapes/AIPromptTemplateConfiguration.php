<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextFullAIPromptEditTemplateConfiguration $textFullAIPromptEditTemplateConfiguration
 */
class AIPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{textFullAIPromptEditTemplateConfiguration?: TextFullAIPromptEditTemplateConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
