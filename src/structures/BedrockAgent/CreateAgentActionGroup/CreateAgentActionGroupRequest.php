<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionGroupExecutor|null $actionGroupExecutor
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED'|null $actionGroupState
 * @property string $agentId
 * @property string $agentVersion
 * @property Shapes\APISchema|null $apiSchema
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\FunctionSchema|null $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionGroupSignature
 * @property array<string, string>|null $parentActionGroupSignatureParams
 */
class CreateAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     actionGroupExecutor?: Shapes\ActionGroupExecutor|null,
     *     actionGroupName: string,
     *     actionGroupState?: 'ENABLED'|'DISABLED'|null,
     *     agentId: string,
     *     agentVersion: string,
     *     apiSchema?: Shapes\APISchema|null,
     *     clientToken?: string|null,
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
