<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentLightLevel|null $ContentLightLevel
 * @property MasteringDisplayColorVolume|null $MasteringDisplayColorVolume
 */
class HdrMetadata extends Shape
{
    /**
     * @param array{
     *     ContentLightLevel?: ContentLightLevel|null,
     *     MasteringDisplayColorVolume?: MasteringDisplayColorVolume|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
