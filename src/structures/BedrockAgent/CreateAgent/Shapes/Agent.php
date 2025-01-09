<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentArn
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED' $agentCollaboration
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string $agentVersion
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property CustomOrchestration $customOrchestration
 * @property string $customerEncryptionKeyArn
 * @property string $description
 * @property list<string> $failureReasons
 * @property string $foundationModel
 * @property GuardrailConfiguration $guardrailConfiguration
 * @property int<60, 3600> $idleSessionTTLInSeconds
 * @property string $instruction
 * @property MemoryConfiguration $memoryConfiguration
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION' $orchestrationType
 * @property \Aws\Api\DateTimeResult $preparedAt
 * @property PromptOverrideConfiguration $promptOverrideConfiguration
 * @property list<string> $recommendedActions
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Agent extends Shape
{
    /**
     * @param array{
     *     agentArn: string,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED',
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     agentVersion: string,
     *     clientToken?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     customOrchestration?: CustomOrchestration,
     *     customerEncryptionKeyArn?: string,
     *     description?: string,
     *     failureReasons?: list<string>,
     *     foundationModel?: string,
     *     guardrailConfiguration?: GuardrailConfiguration,
     *     idleSessionTTLInSeconds: int<60, 3600>,
     *     instruction?: string,
     *     memoryConfiguration?: MemoryConfiguration,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION',
     *     preparedAt?: \Aws\Api\DateTimeResult,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration,
     *     recommendedActions?: list<string>,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
