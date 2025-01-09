<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMembershipsForAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelSummary $ChannelSummary
 * @property AppInstanceUserMembershipSummary $AppInstanceUserMembershipSummary
 */
class ChannelMembershipForAppInstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     ChannelSummary?: ChannelSummary,
     *     AppInstanceUserMembershipSummary?: AppInstanceUserMembershipSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
