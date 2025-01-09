<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionGroupExecutor $actionGroupExecutor
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED' $actionGroupState
 * @property string $agentId
 * @property string $agentVersion
 * @property Shapes\APISchema $apiSchema
 * @property string $description
 * @property Shapes\FunctionSchema $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter' $parentActionGroupSignature
 */
class UpdateAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     actionGroupExecutor?: Shapes\ActionGroupExecutor,
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     actionGroupState?: 'ENABLED'|'DISABLED',
     *     agentId: string,
     *     agentVersion: string,
     *     apiSchema?: Shapes\APISchema,
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
