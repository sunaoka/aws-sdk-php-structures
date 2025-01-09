<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED' $agentCollaboration
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property Shapes\CustomOrchestration $customOrchestration
 * @property string $customerEncryptionKeyArn
 * @property string $description
 * @property string $foundationModel
 * @property Shapes\GuardrailConfiguration $guardrailConfiguration
 * @property int $idleSessionTTLInSeconds
 * @property string $instruction
 * @property Shapes\MemoryConfiguration $memoryConfiguration
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION' $orchestrationType
 * @property Shapes\PromptOverrideConfiguration $promptOverrideConfiguration
 */
class UpdateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED',
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     customOrchestration?: Shapes\CustomOrchestration,
     *     customerEncryptionKeyArn?: string,
     *     description?: string,
     *     foundationModel: string,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration,
     *     idleSessionTTLInSeconds?: int,
     *     instruction?: string,
     *     memoryConfiguration?: Shapes\MemoryConfiguration,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION',
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
