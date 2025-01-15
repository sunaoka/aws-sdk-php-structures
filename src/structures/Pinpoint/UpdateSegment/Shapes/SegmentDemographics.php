<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SetDimension|null $AppVersion
 * @property SetDimension|null $Channel
 * @property SetDimension|null $DeviceType
 * @property SetDimension|null $Make
 * @property SetDimension|null $Model
 * @property SetDimension|null $Platform
 */
class SegmentDemographics extends Shape
{
    /**
     * @param array{
     *     AppVersion?: SetDimension|null,
     *     Channel?: SetDimension|null,
     *     DeviceType?: SetDimension|null,
     *     Make?: SetDimension|null,
     *     Model?: SetDimension|null,
     *     Platform?: SetDimension|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
