<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentName
 * @property string $agentResourceRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $description
 * @property string $foundationModel
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property string|null $instruction
 * @property Shapes\MemoryConfiguration|null $memoryConfiguration
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 */
class UpdateAgentRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentName: string,
     *     agentResourceRoleArn: string,
     *     customerEncryptionKeyArn?: string|null,
     *     description?: string|null,
     *     foundationModel: string,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration|null,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     instruction?: string|null,
     *     memoryConfiguration?: Shapes\MemoryConfiguration|null,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
