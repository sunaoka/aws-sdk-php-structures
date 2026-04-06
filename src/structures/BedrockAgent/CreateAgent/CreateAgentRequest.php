<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentName
 * @property string|null $agentResourceRoleArn
 * @property string|null $clientToken
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $description
 * @property string|null $foundationModel
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property string|null $instruction
 * @property Shapes\MemoryConfiguration|null $memoryConfiguration
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property array<string, string>|null $tags
 */
class CreateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentName: string,
     *     agentResourceRoleArn?: string|null,
     *     clientToken?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     description?: string|null,
     *     foundationModel?: string|null,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration|null,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     instruction?: string|null,
     *     memoryConfiguration?: Shapes\MemoryConfiguration|null,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
