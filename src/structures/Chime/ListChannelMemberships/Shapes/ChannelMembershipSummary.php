<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $Member
 */
class ChannelMembershipSummary extends Shape
{
    /**
     * @param array{Member?: Identity|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
