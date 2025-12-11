<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEGREE_ANGLE'|'RADIAN' $angleUnit
 * @property list<AzElSegment> $azElSegmentList
 */
class AzElSegments extends Shape
{
    /**
     * @param array{
     *     angleUnit: 'DEGREE_ANGLE'|'RADIAN',
     *     azElSegmentList: list<AzElSegment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
