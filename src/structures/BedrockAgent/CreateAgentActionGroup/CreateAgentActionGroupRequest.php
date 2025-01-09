<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionGroupExecutor $actionGroupExecutor
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED' $actionGroupState
 * @property string $agentId
 * @property string $agentVersion
 * @property Shapes\APISchema $apiSchema
 * @property string $clientToken
 * @property string $description
 * @property Shapes\FunctionSchema $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter' $parentActionGroupSignature
 */
class CreateAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     actionGroupExecutor?: Shapes\ActionGroupExecutor,
     *     actionGroupName: string,
     *     actionGroupState?: 'ENABLED'|'DISABLED',
     *     agentId: string,
     *     agentVersion: string,
     *     apiSchema?: Shapes\APISchema,
     *     clientToken?: string,
     *     description?: string,
     *     functionSchema?: Shapes\FunctionSchema,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
