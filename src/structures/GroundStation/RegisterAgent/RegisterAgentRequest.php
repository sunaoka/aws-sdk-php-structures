<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgentDetails $agentDetails
 * @property Shapes\DiscoveryData $discoveryData
 * @property array<string, string>|null $tags
 */
class RegisterAgentRequest extends Request
{
    /**
     * @param array{
     *     agentDetails: Shapes\AgentDetails,
     *     discoveryData: Shapes\DiscoveryData,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
