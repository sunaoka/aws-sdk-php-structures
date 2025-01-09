<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MpdLocation
 * @property 'SINGLE_PERIOD'|'MULTI_PERIOD' $OriginManifestType
 */
class DashConfigurationForPut extends Shape
{
    /**
     * @param array{
     *     MpdLocation?: string,
     *     OriginManifestType?: 'SINGLE_PERIOD'|'MULTI_PERIOD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
