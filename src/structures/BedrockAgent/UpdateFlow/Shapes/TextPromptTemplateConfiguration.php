<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptInputVariable>|null $inputVariables
 * @property string $text
 */
class TextPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     inputVariables?: list<PromptInputVariable>|null,
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
