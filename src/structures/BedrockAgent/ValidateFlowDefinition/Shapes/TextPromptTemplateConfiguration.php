<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptInputVariable> $inputVariables
 * @property string $text
 */
class TextPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     inputVariables?: list<PromptInputVariable>,
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
