<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentArn
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $description
 * @property list<string>|null $failureReasons
 * @property string|null $foundationModel
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property int<60, 5400> $idleSessionTTLInSeconds
 * @property string|null $instruction
 * @property MemoryConfiguration|null $memoryConfiguration
 * @property PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property list<string>|null $recommendedActions
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 */
class AgentVersion extends Shape
{
    /**
     * @param array{
     *     agentArn: string,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null,
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     customerEncryptionKeyArn?: string|null,
     *     description?: string|null,
     *     failureReasons?: list<string>|null,
     *     foundationModel?: string|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     idleSessionTTLInSeconds: int<60, 5400>,
     *     instruction?: string|null,
     *     memoryConfiguration?: MemoryConfiguration|null,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration|null,
     *     recommendedActions?: list<string>|null,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
