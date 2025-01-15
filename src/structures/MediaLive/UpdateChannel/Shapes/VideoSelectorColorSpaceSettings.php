<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Hdr10Settings|null $Hdr10Settings
 */
class VideoSelectorColorSpaceSettings extends Shape
{
    /**
     * @param array{Hdr10Settings?: Hdr10Settings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
