<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneChangeBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AvailabilityZone'|'AvailabilityZoneGroup'|'Region'|'Partition'|'Global'|null $LocationType
 * @property string|null $LocationId
 */
class AZAffinity extends Shape
{
    /**
     * @param array{
     *     LocationType?: 'AvailabilityZone'|'AvailabilityZoneGroup'|'Region'|'Partition'|'Global'|null,
     *     LocationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
