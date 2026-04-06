<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgressiveConfig|null $progressive
 * @property PredictiveConfig|null $predictive
 * @property AgentlessConfig|null $agentless
 * @property PreviewConfig|null $preview
 */
class TelephonyOutboundMode extends Shape
{
    /**
     * @param array{
     *     progressive?: ProgressiveConfig|null,
     *     predictive?: PredictiveConfig|null,
     *     agentless?: AgentlessConfig|null,
     *     preview?: PreviewConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
