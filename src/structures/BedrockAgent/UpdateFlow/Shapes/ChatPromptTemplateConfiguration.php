<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptInputVariable>|null $inputVariables
 * @property list<Message> $messages
 * @property list<SystemContentBlock>|null $system
 * @property ToolConfiguration|null $toolConfiguration
 */
class ChatPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     inputVariables?: list<PromptInputVariable>|null,
     *     messages: list<Message>,
     *     system?: list<SystemContentBlock>|null,
     *     toolConfiguration?: ToolConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
