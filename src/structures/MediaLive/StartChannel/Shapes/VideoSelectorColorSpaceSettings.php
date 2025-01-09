<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Hdr10Settings $Hdr10Settings
 */
class VideoSelectorColorSpaceSettings extends Shape
{
    /**
     * @param array{Hdr10Settings?: Hdr10Settings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
