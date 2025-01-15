<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $AvailabilityZoneId
 * @property int|null $Score
 */
class SpotPlacementScore extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Score?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
