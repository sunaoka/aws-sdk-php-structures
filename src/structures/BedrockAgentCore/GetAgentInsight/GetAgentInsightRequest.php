<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetAgentInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $agentInsightId
 */
class GetAgentInsightRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     agentInsightId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
