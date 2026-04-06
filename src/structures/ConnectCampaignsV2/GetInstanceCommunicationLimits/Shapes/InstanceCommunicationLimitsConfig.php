<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetInstanceCommunicationLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommunicationLimits|null $allChannelSubtypes
 */
class InstanceCommunicationLimitsConfig extends Shape
{
    /**
     * @param array{allChannelSubtypes?: CommunicationLimits|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
