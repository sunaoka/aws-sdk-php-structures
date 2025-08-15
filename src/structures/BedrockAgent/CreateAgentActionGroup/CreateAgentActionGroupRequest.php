<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $actionGroupName
 * @property string|null $clientToken
 * @property string|null $description
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null $parentActionGroupSignature
 * @property array<string, string>|null $parentActionGroupSignatureParams
 * @property Shapes\ActionGroupExecutor|null $actionGroupExecutor
 * @property Shapes\APISchema|null $apiSchema
 * @property 'ENABLED'|'DISABLED'|null $actionGroupState
 * @property Shapes\FunctionSchema|null $functionSchema
 */
class CreateAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     actionGroupName: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|'ANTHROPIC.Computer'|'ANTHROPIC.Bash'|'ANTHROPIC.TextEditor'|null,
     *     parentActionGroupSignatureParams?: array<string, string>|null,
     *     actionGroupExecutor?: Shapes\ActionGroupExecutor|null,
     *     apiSchema?: Shapes\APISchema|null,
     *     actionGroupState?: 'ENABLED'|'DISABLED'|null,
     *     functionSchema?: Shapes\FunctionSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
