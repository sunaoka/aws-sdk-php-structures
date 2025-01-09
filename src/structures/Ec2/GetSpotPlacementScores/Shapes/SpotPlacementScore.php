<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $AvailabilityZoneId
 * @property int $Score
 */
class SpotPlacementScore extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     AvailabilityZoneId?: string,
     *     Score?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
