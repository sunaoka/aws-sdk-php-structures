<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignDialerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgressiveDialerConfig|null $progressiveDialerConfig
 * @property PredictiveDialerConfig|null $predictiveDialerConfig
 * @property AgentlessDialerConfig|null $agentlessDialerConfig
 */
class DialerConfig extends Shape
{
    /**
     * @param array{
     *     progressiveDialerConfig?: ProgressiveDialerConfig|null,
     *     predictiveDialerConfig?: PredictiveDialerConfig|null,
     *     agentlessDialerConfig?: AgentlessDialerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
