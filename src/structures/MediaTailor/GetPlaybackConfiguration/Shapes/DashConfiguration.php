<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestEndpointPrefix
 * @property string $MpdLocation
 * @property 'SINGLE_PERIOD'|'MULTI_PERIOD' $OriginManifestType
 */
class DashConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestEndpointPrefix?: string,
     *     MpdLocation?: string,
     *     OriginManifestType?: 'SINGLE_PERIOD'|'MULTI_PERIOD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
