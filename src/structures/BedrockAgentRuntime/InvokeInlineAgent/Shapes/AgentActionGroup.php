<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroupName
 * @property string|null $description
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionGroupSignature
 * @property ActionGroupExecutor|null $actionGroupExecutor
 * @property APISchema|null $apiSchema
 * @property FunctionSchema|null $functionSchema
 * @property array<string, string>|null $parentActionGroupSignatureParams
 */
class AgentActionGroup extends Shape
{
    /**
     * @param array{
     *     actionGroupName: string,
     *     description?: string|null,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null,
     *     actionGroupExecutor?: ActionGroupExecutor|null,
     *     apiSchema?: APISchema|null,
     *     functionSchema?: FunctionSchema|null,
     *     parentActionGroupSignatureParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
