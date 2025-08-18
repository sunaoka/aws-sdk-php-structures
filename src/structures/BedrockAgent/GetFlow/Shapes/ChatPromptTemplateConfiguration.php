<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 * @property list<SystemContentBlock>|null $system
 * @property list<PromptInputVariable>|null $inputVariables
 * @property ToolConfiguration|null $toolConfiguration
 */
class ChatPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     messages: list<Message>,
     *     system?: list<SystemContentBlock>|null,
     *     inputVariables?: list<PromptInputVariable>|null,
     *     toolConfiguration?: ToolConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
