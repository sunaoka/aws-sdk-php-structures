<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupExecutor|null $actionGroupExecutor
 * @property string $actionGroupName
 * @property APISchema|null $apiSchema
 * @property string|null $description
 * @property FunctionSchema|null $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionGroupSignature
 * @property array<string, string>|null $parentActionGroupSignatureParams
 */
class AgentActionGroup extends Shape
{
    /**
     * @param array{
     *     actionGroupExecutor?: ActionGroupExecutor|null,
     *     actionGroupName: string,
     *     apiSchema?: APISchema|null,
     *     description?: string|null,
     *     functionSchema?: FunctionSchema|null,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null,
     *     parentActionGroupSignatureParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
