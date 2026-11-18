<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentInsightStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $agentInsightStoreId
 * @property 'ENABLED'|'DISABLED'|null $enablementStatus
 * @property Shapes\AgentInsightStoreEncryptionConfiguration|null $encryptionConfiguration
 */
class UpdateAgentInsightStoreRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     agentInsightStoreId: string,
     *     enablementStatus?: 'ENABLED'|'DISABLED'|null,
     *     encryptionConfiguration?: Shapes\AgentInsightStoreEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
