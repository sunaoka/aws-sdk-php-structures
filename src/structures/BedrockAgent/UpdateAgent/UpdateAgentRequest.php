<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property Shapes\CustomOrchestration|null $customOrchestration
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $description
 * @property string $foundationModel
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property string|null $instruction
 * @property Shapes\MemoryConfiguration|null $memoryConfiguration
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null $orchestrationType
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 */
class UpdateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null,
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     customOrchestration?: Shapes\CustomOrchestration|null,
     *     customerEncryptionKeyArn?: string|null,
     *     description?: string|null,
     *     foundationModel: string,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration|null,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     instruction?: string|null,
     *     memoryConfiguration?: Shapes\MemoryConfiguration|null,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
