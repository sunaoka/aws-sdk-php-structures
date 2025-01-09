<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelModeratedByAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelSummary $ChannelSummary
 */
class ChannelModeratedByAppInstanceUserSummary extends Shape
{
    /**
     * @param array{ChannelSummary?: ChannelSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
