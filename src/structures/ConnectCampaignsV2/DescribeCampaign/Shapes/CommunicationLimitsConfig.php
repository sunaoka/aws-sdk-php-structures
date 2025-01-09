<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommunicationLimits $allChannelSubtypes
 */
class CommunicationLimitsConfig extends Shape
{
    /**
     * @param array{allChannelSubtypes?: CommunicationLimits} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
