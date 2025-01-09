<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelPlacementGroupId
 * @property string $ClusterId
 */
class AnywhereSettings extends Shape
{
    /**
     * @param array{
     *     ChannelPlacementGroupId?: string,
     *     ClusterId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
