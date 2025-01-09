<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED' $agentCollaboration
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property string $clientToken
 * @property Shapes\CustomOrchestration $customOrchestration
 * @property string $customerEncryptionKeyArn
 * @property string $description
 * @property string $foundationModel
 * @property Shapes\GuardrailConfiguration $guardrailConfiguration
 * @property int<60, 3600> $idleSessionTTLInSeconds
 * @property string $instruction
 * @property Shapes\MemoryConfiguration $memoryConfiguration
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION' $orchestrationType
 * @property Shapes\PromptOverrideConfiguration $promptOverrideConfiguration
 * @property array<string, string> $tags
 */
class CreateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED',
     *     agentName: string,
     *     agentResourceRoleArn?: string,
     *     clientToken?: string,
     *     customOrchestration?: Shapes\CustomOrchestration,
     *     customerEncryptionKeyArn?: string,
     *     description?: string,
     *     foundationModel?: string,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration,
     *     idleSessionTTLInSeconds?: int<60, 3600>,
     *     instruction?: string,
     *     memoryConfiguration?: Shapes\MemoryConfiguration,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION',
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
