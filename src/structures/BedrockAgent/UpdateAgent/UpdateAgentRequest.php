<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentName
 * @property string|null $instruction
 * @property string $foundationModel
 * @property string|null $description
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null $orchestrationType
 * @property Shapes\CustomOrchestration|null $customOrchestration
 * @property int<60, 5400>|null $idleSessionTTLInSeconds
 * @property string $agentResourceRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property Shapes\MemoryConfiguration|null $memoryConfiguration
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 */
class UpdateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentName: string,
     *     instruction?: string|null,
     *     foundationModel: string,
     *     description?: string|null,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null,
     *     customOrchestration?: Shapes\CustomOrchestration|null,
     *     idleSessionTTLInSeconds?: int<60, 5400>|null,
     *     agentResourceRoleArn: string,
     *     customerEncryptionKeyArn?: string|null,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration|null,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration|null,
     *     memoryConfiguration?: Shapes\MemoryConfiguration|null,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
