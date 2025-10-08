<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeInterpreterIdentifier
 * @property string|null $sessionId
 * @property 'executeCode'|'executeCommand'|'readFiles'|'listFiles'|'removeFiles'|'writeFiles'|'startCommandExecution'|'getTask'|'stopTask' $name
 * @property Shapes\ToolArguments|null $arguments
 */
class InvokeCodeInterpreterRequest extends Request
{
    /**
     * @param array{
     *     codeInterpreterIdentifier: string,
     *     sessionId?: string|null,
     *     name: 'executeCode'|'executeCommand'|'readFiles'|'listFiles'|'removeFiles'|'writeFiles'|'startCommandExecution'|'getTask'|'stopTask',
     *     arguments?: Shapes\ToolArguments|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
