<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupExecutor|null $actionGroupExecutor
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED' $actionGroupState
 * @property string $agentId
 * @property string $agentVersion
 * @property APISchema|null $apiSchema
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property FunctionSchema|null $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|null $parentActionSignature
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentActionGroup extends Shape
{
    /**
     * @param array{
     *     actionGroupExecutor?: ActionGroupExecutor|null,
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     actionGroupState: 'ENABLED'|'DISABLED',
     *     agentId: string,
     *     agentVersion: string,
     *     apiSchema?: APISchema|null,
     *     clientToken?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     functionSchema?: FunctionSchema|null,
     *     parentActionSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
