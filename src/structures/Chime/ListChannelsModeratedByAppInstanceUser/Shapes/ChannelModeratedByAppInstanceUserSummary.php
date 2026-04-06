<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelsModeratedByAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelSummary|null $ChannelSummary
 */
class ChannelModeratedByAppInstanceUserSummary extends Shape
{
    /**
     * @param array{ChannelSummary?: ChannelSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
