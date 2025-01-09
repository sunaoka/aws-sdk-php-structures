<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, max> $MaximumSubChannels
 * @property int<2, max> $TargetMembershipsPerSubChannel
 * @property int<1, 40> $MinimumMembershipPercentage
 */
class ElasticChannelConfiguration extends Shape
{
    /**
     * @param array{
     *     MaximumSubChannels: int<2, max>,
     *     TargetMembershipsPerSubChannel: int<2, max>,
     *     MinimumMembershipPercentage: int<1, 40>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
