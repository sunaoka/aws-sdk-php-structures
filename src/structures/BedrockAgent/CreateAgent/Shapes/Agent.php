<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentName
 * @property string $agentArn
 * @property string $agentVersion
 * @property string|null $clientToken
 * @property string|null $instruction
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string|null $foundationModel
 * @property string|null $description
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null $orchestrationType
 * @property CustomOrchestration|null $customOrchestration
 * @property int<60, 5400> $idleSessionTTLInSeconds
 * @property string $agentResourceRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $preparedAt
 * @property list<string>|null $failureReasons
 * @property list<string>|null $recommendedActions
 * @property PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property MemoryConfiguration|null $memoryConfiguration
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 */
class Agent extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentName: string,
     *     agentArn: string,
     *     agentVersion: string,
     *     clientToken?: string|null,
     *     instruction?: string|null,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     foundationModel?: string|null,
     *     description?: string|null,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null,
     *     customOrchestration?: CustomOrchestration|null,
     *     idleSessionTTLInSeconds: int<60, 5400>,
     *     agentResourceRoleArn: string,
     *     customerEncryptionKeyArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     preparedAt?: \Aws\Api\DateTimeResult|null,
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
