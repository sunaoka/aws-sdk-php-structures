<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentlessConfig|null $agentless
 */
class SmsOutboundMode extends Shape
{
    /**
     * @param array{agentless?: AgentlessConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
