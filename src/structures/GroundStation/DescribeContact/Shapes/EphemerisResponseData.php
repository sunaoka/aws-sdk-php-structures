<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ephemerisId
 * @property 'TLE'|'OEM'|'AZ_EL'|'SERVICE_MANAGED' $ephemerisType
 */
class EphemerisResponseData extends Shape
{
    /**
     * @param array{
     *     ephemerisId?: string|null,
     *     ephemerisType: 'TLE'|'OEM'|'AZ_EL'|'SERVICE_MANAGED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
