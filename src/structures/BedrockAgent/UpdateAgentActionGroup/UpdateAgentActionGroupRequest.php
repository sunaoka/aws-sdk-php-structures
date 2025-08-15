<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property string|null $description
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionGroupSignature
 * @property array<string, string>|null $parentActionGroupSignatureParams
 * @property Shapes\ActionGroupExecutor|null $actionGroupExecutor
 * @property 'ENABLED'|'DISABLED'|null $actionGroupState
 * @property Shapes\APISchema|null $apiSchema
 * @property Shapes\FunctionSchema|null $functionSchema
 */
class UpdateAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     description?: string|null,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null,
     *     parentActionGroupSignatureParams?: array<string, string>|null,
     *     actionGroupExecutor?: Shapes\ActionGroupExecutor|null,
     *     actionGroupState?: 'ENABLED'|'DISABLED'|null,
     *     apiSchema?: Shapes\APISchema|null,
     *     functionSchema?: Shapes\FunctionSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
