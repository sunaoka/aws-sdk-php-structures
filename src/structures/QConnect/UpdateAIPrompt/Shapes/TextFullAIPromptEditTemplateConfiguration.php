<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class TextFullAIPromptEditTemplateConfiguration extends Shape
{
    /**
     * @param array{text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
