<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionGroupExecutor|null $actionGroupExecutor
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED'|null $actionGroupState
 * @property string $agentId
 * @property string $agentVersion
 * @property Shapes\APISchema|null $apiSchema
 * @property string|null $description
 * @property Shapes\FunctionSchema|null $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionGroupSignature
 * @property array<string, string>|null $parentActionGroupSignatureParams
 */
class UpdateAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     actionGroupExecutor?: Shapes\ActionGroupExecutor|null,
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     actionGroupState?: 'ENABLED'|'DISABLED'|null,
     *     agentId: string,
     *     agentVersion: string,
     *     apiSchema?: Shapes\APISchema|null,
     *     description?: string|null,
     *     functionSchema?: Shapes\FunctionSchema|null,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null,
     *     parentActionGroupSignatureParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
