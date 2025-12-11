<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentlessConfig|null $agentless
 */
class WhatsAppOutboundMode extends Shape
{
    /**
     * @param array{agentless?: AgentlessConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
