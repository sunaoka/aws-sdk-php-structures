<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelId
 * @property string|null $ChannelGroup
 * @property string|null $ChannelName
 */
class MediaPackageOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string|null,
     *     ChannelGroup?: string|null,
     *     ChannelName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
