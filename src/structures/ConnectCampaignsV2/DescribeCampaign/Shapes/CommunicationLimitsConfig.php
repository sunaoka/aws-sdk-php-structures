<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommunicationLimits|null $allChannelSubtypes
 */
class CommunicationLimitsConfig extends Shape
{
    /**
     * @param array{allChannelSubtypes?: CommunicationLimits|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
