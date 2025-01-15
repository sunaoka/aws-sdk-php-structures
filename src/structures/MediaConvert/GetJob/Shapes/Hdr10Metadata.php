<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 50000>|null $BluePrimaryX
 * @property int<0, 50000>|null $BluePrimaryY
 * @property int<0, 50000>|null $GreenPrimaryX
 * @property int<0, 50000>|null $GreenPrimaryY
 * @property int<0, 65535>|null $MaxContentLightLevel
 * @property int<0, 65535>|null $MaxFrameAverageLightLevel
 * @property int<0, 2147483647>|null $MaxLuminance
 * @property int<0, 2147483647>|null $MinLuminance
 * @property int<0, 50000>|null $RedPrimaryX
 * @property int<0, 50000>|null $RedPrimaryY
 * @property int<0, 50000>|null $WhitePointX
 * @property int<0, 50000>|null $WhitePointY
 */
class Hdr10Metadata extends Shape
{
    /**
     * @param array{
     *     BluePrimaryX?: int<0, 50000>|null,
     *     BluePrimaryY?: int<0, 50000>|null,
     *     GreenPrimaryX?: int<0, 50000>|null,
     *     GreenPrimaryY?: int<0, 50000>|null,
     *     MaxContentLightLevel?: int<0, 65535>|null,
     *     MaxFrameAverageLightLevel?: int<0, 65535>|null,
     *     MaxLuminance?: int<0, 2147483647>|null,
     *     MinLuminance?: int<0, 2147483647>|null,
     *     RedPrimaryX?: int<0, 50000>|null,
     *     RedPrimaryY?: int<0, 50000>|null,
     *     WhitePointX?: int<0, 50000>|null,
     *     WhitePointY?: int<0, 50000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
