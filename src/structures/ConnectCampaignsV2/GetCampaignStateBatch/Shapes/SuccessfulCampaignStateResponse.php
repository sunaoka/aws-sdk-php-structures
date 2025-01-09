<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetCampaignStateBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $campaignId
 * @property 'Initialized'|'Running'|'Paused'|'Stopped'|'Failed'|'Completed' $state
 */
class SuccessfulCampaignStateResponse extends Shape
{
    /**
     * @param array{
     *     campaignId?: string,
     *     state?: 'Initialized'|'Running'|'Paused'|'Stopped'|'Failed'|'Completed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
