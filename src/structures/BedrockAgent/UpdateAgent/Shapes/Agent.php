<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentArn
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string $agentVersion
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $description
 * @property list<string>|null $failureReasons
 * @property string|null $foundationModel
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property int<60, 3600> $idleSessionTTLInSeconds
 * @property string|null $instruction
 * @property MemoryConfiguration|null $memoryConfiguration
 * @property \Aws\Api\DateTimeResult|null $preparedAt
 * @property PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property list<string>|null $recommendedActions
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Agent extends Shape
{
    /**
     * @param array{
     *     agentArn: string,
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     agentVersion: string,
     *     clientToken?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     customerEncryptionKeyArn?: string|null,
     *     description?: string|null,
     *     failureReasons?: list<string>|null,
     *     foundationModel?: string|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     idleSessionTTLInSeconds: int<60, 3600>,
     *     instruction?: string|null,
     *     memoryConfiguration?: MemoryConfiguration|null,
     *     preparedAt?: \Aws\Api\DateTimeResult|null,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration|null,
     *     recommendedActions?: list<string>|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
