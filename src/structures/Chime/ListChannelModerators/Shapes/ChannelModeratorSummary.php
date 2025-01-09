<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelModerators\Shapes;

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
