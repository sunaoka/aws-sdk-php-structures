<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelId
 * @property string|null $ChannelGroup
 * @property string|null $ChannelName
 * @property string|null $ChannelEndpointId
 * @property string|null $MediaPackageRegionName
 */
class MediaPackageOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string|null,
     *     ChannelGroup?: string|null,
     *     ChannelName?: string|null,
     *     ChannelEndpointId?: string|null,
     *     MediaPackageRegionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
