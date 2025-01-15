<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListSubChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubChannelId
 * @property int|null $MembershipCount
 */
class SubChannelSummary extends Shape
{
    /**
     * @param array{
     *     SubChannelId?: string|null,
     *     MembershipCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
