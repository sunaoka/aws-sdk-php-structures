<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelPlacementGroupId
 * @property string|null $ClusterId
 */
class DescribeAnywhereSettings extends Shape
{
    /**
     * @param array{
     *     ChannelPlacementGroupId?: string|null,
     *     ClusterId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
