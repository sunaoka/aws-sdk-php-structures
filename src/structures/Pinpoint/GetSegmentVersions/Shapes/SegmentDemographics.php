<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SetDimension $AppVersion
 * @property SetDimension $Channel
 * @property SetDimension $DeviceType
 * @property SetDimension $Make
 * @property SetDimension $Model
 * @property SetDimension $Platform
 */
class SegmentDemographics extends Shape
{
    /**
     * @param array{
     *     AppVersion?: SetDimension,
     *     Channel?: SetDimension,
     *     DeviceType?: SetDimension,
     *     Make?: SetDimension,
     *     Model?: SetDimension,
     *     Platform?: SetDimension
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
