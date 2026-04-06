<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelId
 */
class MediaPackageOutputDestinationSettings extends Shape
{
    /**
     * @param array{ChannelId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
