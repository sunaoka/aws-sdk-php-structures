<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BluePrimaryX
 * @property int $BluePrimaryY
 * @property int $GreenPrimaryX
 * @property int $GreenPrimaryY
 * @property int $MaxContentLightLevel
 * @property int $MaxFrameAverageLightLevel
 * @property int $MaxLuminance
 * @property int $MinLuminance
 * @property int $RedPrimaryX
 * @property int $RedPrimaryY
 * @property int $WhitePointX
 * @property int $WhitePointY
 */
class Hdr10Metadata extends Shape
{
    /**
     * @param array{
     *     BluePrimaryX?: int,
     *     BluePrimaryY?: int,
     *     GreenPrimaryX?: int,
     *     GreenPrimaryY?: int,
     *     MaxContentLightLevel?: int,
     *     MaxFrameAverageLightLevel?: int,
     *     MaxLuminance?: int,
     *     MinLuminance?: int,
     *     RedPrimaryX?: int,
     *     RedPrimaryY?: int,
     *     WhitePointX?: int,
     *     WhitePointY?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
