<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumSubChannels
 * @property int $TargetMembershipsPerSubChannel
 * @property int $MinimumMembershipPercentage
 */
class ElasticChannelConfiguration extends Shape
{
    /**
     * @param array{
     *     MaximumSubChannels: int,
     *     TargetMembershipsPerSubChannel: int,
     *     MinimumMembershipPercentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
