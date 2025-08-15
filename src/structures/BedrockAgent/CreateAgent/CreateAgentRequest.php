<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentName
 * @property string|null $clientToken
 * @property string|null $instruction
 * @property string|null $foundationModel
 * @property string|null $description
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null $orchestrationType
 * @property Shapes\CustomOrchestration|null $customOrchestration
 * @property int<60, 5400>|null $idleSessionTTLInSeconds
 * @property string|null $agentResourceRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property array<string, string>|null $tags
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property Shapes\MemoryConfiguration|null $memoryConfiguration
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 */
class CreateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentName: string,
     *     clientToken?: string|null,
     *     instruction?: string|null,
     *     foundationModel?: string|null,
     *     description?: string|null,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null,
     *     customOrchestration?: Shapes\CustomOrchestration|null,
     *     idleSessionTTLInSeconds?: int<60, 5400>|null,
     *     agentResourceRoleArn?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     tags?: array<string, string>|null,
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
