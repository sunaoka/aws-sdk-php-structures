<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelModerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $Moderator
 */
class ChannelModeratorSummary extends Shape
{
    /**
     * @param array{Moderator?: Identity|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
