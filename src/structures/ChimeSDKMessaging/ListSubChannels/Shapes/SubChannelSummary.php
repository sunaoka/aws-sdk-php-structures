<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListSubChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubChannelId
 * @property int $MembershipCount
 */
class SubChannelSummary extends Shape
{
    /**
     * @param array{
     *     SubChannelId?: string,
     *     MembershipCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
