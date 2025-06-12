<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommunicationLimits|null $allChannelSubtypes
 * @property 'OPT_IN'|'OPT_OUT'|null $instanceLimitsHandling
 */
class CommunicationLimitsConfig extends Shape
{
    /**
     * @param array{
     *     allChannelSubtypes?: CommunicationLimits|null,
     *     instanceLimitsHandling?: 'OPT_IN'|'OPT_OUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
