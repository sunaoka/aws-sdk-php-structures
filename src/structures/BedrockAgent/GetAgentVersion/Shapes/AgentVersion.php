<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentArn
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED' $agentCollaboration
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $customerEncryptionKeyArn
 * @property string $description
 * @property list<string> $failureReasons
 * @property string $foundationModel
 * @property GuardrailConfiguration $guardrailConfiguration
 * @property int $idleSessionTTLInSeconds
 * @property string $instruction
 * @property MemoryConfiguration $memoryConfiguration
 * @property PromptOverrideConfiguration $promptOverrideConfiguration
 * @property list<string> $recommendedActions
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 */
class AgentVersion extends Shape
{
    /**
     * @param array{
     *     agentArn: string,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED',
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     customerEncryptionKeyArn?: string,
     *     description?: string,
     *     failureReasons?: list<string>,
     *     foundationModel?: string,
     *     guardrailConfiguration?: GuardrailConfiguration,
     *     idleSessionTTLInSeconds: int,
     *     instruction?: string,
     *     memoryConfiguration?: MemoryConfiguration,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration,
     *     recommendedActions?: list<string>,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
