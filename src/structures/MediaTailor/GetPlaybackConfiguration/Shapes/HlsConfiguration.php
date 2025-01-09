<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestEndpointPrefix
 */
class HlsConfiguration extends Shape
{
    /**
     * @param array{ManifestEndpointPrefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
