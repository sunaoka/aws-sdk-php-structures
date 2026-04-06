<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AWSRegion
 * @property string|null $LocalZoneGroup
 * @property Coordinates|null $Coordinates
 * @property int<-99, 99>|null $Bias
 */
class GeoProximityLocation extends Shape
{
    /**
     * @param array{
     *     AWSRegion?: string|null,
     *     LocalZoneGroup?: string|null,
     *     Coordinates?: Coordinates|null,
     *     Bias?: int<-99, 99>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
