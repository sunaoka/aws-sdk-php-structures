<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptInputVariable> $inputVariables
 * @property list<Message> $messages
 * @property list<SystemContentBlock> $system
 * @property ToolConfiguration $toolConfiguration
 */
class ChatPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     inputVariables?: list<PromptInputVariable>,
     *     messages: list<Message>,
     *     system?: list<SystemContentBlock>,
     *     toolConfiguration?: ToolConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
