<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSRegion
 * @property string $LocalZoneGroup
 * @property Coordinates $Coordinates
 * @property int $Bias
 */
class GeoProximityLocation extends Shape
{
    /**
     * @param array{
     *     AWSRegion?: string,
     *     LocalZoneGroup?: string,
     *     Coordinates?: Coordinates,
     *     Bias?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
