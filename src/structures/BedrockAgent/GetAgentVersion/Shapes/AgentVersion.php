<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentName
 * @property string $agentArn
 * @property string $version
 * @property string|null $instruction
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string|null $foundationModel
 * @property string|null $description
 * @property int<60, 5400> $idleSessionTTLInSeconds
 * @property string $agentResourceRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string>|null $failureReasons
 * @property list<string>|null $recommendedActions
 * @property PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property MemoryConfiguration|null $memoryConfiguration
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 */
class AgentVersion extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentName: string,
     *     agentArn: string,
     *     version: string,
     *     instruction?: string|null,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     foundationModel?: string|null,
     *     description?: string|null,
     *     idleSessionTTLInSeconds: int<60, 5400>,
     *     agentResourceRoleArn: string,
     *     customerEncryptionKeyArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     failureReasons?: list<string>|null,
     *     recommendedActions?: list<string>|null,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     memoryConfiguration?: MemoryConfiguration|null,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
