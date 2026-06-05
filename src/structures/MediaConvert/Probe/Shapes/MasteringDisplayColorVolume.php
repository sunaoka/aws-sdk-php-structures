<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BluePrimaryX
 * @property int|null $BluePrimaryY
 * @property int|null $GreenPrimaryX
 * @property int|null $GreenPrimaryY
 * @property int|null $MaxLuminance
 * @property int|null $MinLuminance
 * @property int|null $RedPrimaryX
 * @property int|null $RedPrimaryY
 * @property int|null $WhitePointX
 * @property int|null $WhitePointY
 */
class MasteringDisplayColorVolume extends Shape
{
    /**
     * @param array{
     *     BluePrimaryX?: int|null,
     *     BluePrimaryY?: int|null,
     *     GreenPrimaryX?: int|null,
     *     GreenPrimaryY?: int|null,
     *     MaxLuminance?: int|null,
     *     MinLuminance?: int|null,
     *     RedPrimaryX?: int|null,
     *     RedPrimaryY?: int|null,
     *     WhitePointX?: int|null,
     *     WhitePointY?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
