<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelId
 * @property string $ChannelGroup
 * @property string $ChannelName
 */
class MediaPackageOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string,
     *     ChannelGroup?: string,
     *     ChannelName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
