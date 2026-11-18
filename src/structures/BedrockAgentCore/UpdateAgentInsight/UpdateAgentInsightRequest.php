<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateAgentInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $agentInsightId
 * @property 'ACTIVE'|'ARCHIVED' $archiveStatus
 */
class UpdateAgentInsightRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     agentInsightId: string,
     *     archiveStatus: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
