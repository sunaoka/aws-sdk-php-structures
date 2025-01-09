<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelModerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $Moderator
 */
class ChannelModeratorSummary extends Shape
{
    /**
     * @param array{Moderator?: Identity} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
