<?php

namespace Sunaoka\Aws\Structures\IVS\CreateAdConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $playbackConfigurationArn
 */
class MediaTailorPlaybackConfiguration extends Shape
{
    /**
     * @param array{playbackConfigurationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
