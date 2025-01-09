<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 50000> $BluePrimaryX
 * @property int<0, 50000> $BluePrimaryY
 * @property int<0, 50000> $GreenPrimaryX
 * @property int<0, 50000> $GreenPrimaryY
 * @property int<0, 65535> $MaxContentLightLevel
 * @property int<0, 65535> $MaxFrameAverageLightLevel
 * @property int<0, 2147483647> $MaxLuminance
 * @property int<0, 2147483647> $MinLuminance
 * @property int<0, 50000> $RedPrimaryX
 * @property int<0, 50000> $RedPrimaryY
 * @property int<0, 50000> $WhitePointX
 * @property int<0, 50000> $WhitePointY
 */
class Hdr10Metadata extends Shape
{
    /**
     * @param array{
     *     BluePrimaryX?: int<0, 50000>,
     *     BluePrimaryY?: int<0, 50000>,
     *     GreenPrimaryX?: int<0, 50000>,
     *     GreenPrimaryY?: int<0, 50000>,
     *     MaxContentLightLevel?: int<0, 65535>,
     *     MaxFrameAverageLightLevel?: int<0, 65535>,
     *     MaxLuminance?: int<0, 2147483647>,
     *     MinLuminance?: int<0, 2147483647>,
     *     RedPrimaryX?: int<0, 50000>,
     *     RedPrimaryY?: int<0, 50000>,
     *     WhitePointX?: int<0, 50000>,
     *     WhitePointY?: int<0, 50000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
