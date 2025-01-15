<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MpdLocation
 * @property 'SINGLE_PERIOD'|'MULTI_PERIOD'|null $OriginManifestType
 */
class DashConfigurationForPut extends Shape
{
    /**
     * @param array{
     *     MpdLocation?: string|null,
     *     OriginManifestType?: 'SINGLE_PERIOD'|'MULTI_PERIOD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
