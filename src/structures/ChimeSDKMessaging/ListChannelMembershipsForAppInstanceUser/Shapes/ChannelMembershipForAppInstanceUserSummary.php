<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMembershipsForAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelSummary|null $ChannelSummary
 * @property AppInstanceUserMembershipSummary|null $AppInstanceUserMembershipSummary
 */
class ChannelMembershipForAppInstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     ChannelSummary?: ChannelSummary|null,
     *     AppInstanceUserMembershipSummary?: AppInstanceUserMembershipSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
