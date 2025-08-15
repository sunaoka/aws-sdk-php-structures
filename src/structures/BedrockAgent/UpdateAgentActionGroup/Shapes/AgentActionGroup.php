<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property string|null $clientToken
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionSignature
 * @property array<string, string>|null $parentActionGroupSignatureParams
 * @property ActionGroupExecutor|null $actionGroupExecutor
 * @property APISchema|null $apiSchema
 * @property FunctionSchema|null $functionSchema
 * @property 'ENABLED'|'DISABLED' $actionGroupState
 */
class AgentActionGroup extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     parentActionSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null,
     *     parentActionGroupSignatureParams?: array<string, string>|null,
     *     actionGroupExecutor?: ActionGroupExecutor|null,
     *     apiSchema?: APISchema|null,
     *     functionSchema?: FunctionSchema|null,
     *     actionGroupState: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
