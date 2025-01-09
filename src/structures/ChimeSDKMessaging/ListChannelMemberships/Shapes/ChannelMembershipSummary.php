<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $Member
 */
class ChannelMembershipSummary extends Shape
{
    /**
     * @param array{Member?: Identity} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
