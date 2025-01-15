<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignStateBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $campaignId
 * @property 'Initialized'|'Running'|'Paused'|'Stopped'|'Failed'|null $state
 */
class SuccessfulCampaignStateResponse extends Shape
{
    /**
     * @param array{
     *     campaignId?: string|null,
     *     state?: 'Initialized'|'Running'|'Paused'|'Stopped'|'Failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
