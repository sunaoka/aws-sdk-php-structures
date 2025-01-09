<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupExecutor $actionGroupExecutor
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED' $actionGroupState
 * @property string $agentId
 * @property string $agentVersion
 * @property APISchema $apiSchema
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property FunctionSchema $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter' $parentActionSignature
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentActionGroup extends Shape
{
    /**
     * @param array{
     *     actionGroupExecutor?: ActionGroupExecutor,
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     actionGroupState: 'ENABLED'|'DISABLED',
     *     agentId: string,
     *     agentVersion: string,
     *     apiSchema?: APISchema,
     *     clientToken?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     functionSchema?: FunctionSchema,
     *     parentActionSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
