<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DiscoveryData $discoveryData
 * @property Shapes\AgentDetails $agentDetails
 * @property array<string, string>|null $tags
 */
class RegisterAgentRequest extends Request
{
    /**
     * @param array{
     *     discoveryData: Shapes\DiscoveryData,
     *     agentDetails: Shapes\AgentDetails,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
