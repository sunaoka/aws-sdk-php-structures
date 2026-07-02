<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManifestEndpointPrefix
 * @property string|null $DualStackManifestEndpointPrefix
 */
class HlsConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestEndpointPrefix?: string|null,
     *     DualStackManifestEndpointPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
