<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'opt-in-not-required'|'opted-in'|'not-opted-in' $OptInStatus
 * @property list<AvailabilityZoneMessage> $Messages
 * @property string $RegionName
 * @property string $ZoneName
 * @property string $ZoneId
 * @property string $GroupName
 * @property string $NetworkBorderGroup
 * @property string $ZoneType
 * @property string $ParentZoneName
 * @property string $ParentZoneId
 * @property 'available'|'information'|'impaired'|'unavailable'|'constrained' $State
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     OptInStatus?: 'opt-in-not-required'|'opted-in'|'not-opted-in',
     *     Messages?: list<AvailabilityZoneMessage>,
     *     RegionName?: string,
     *     ZoneName?: string,
     *     ZoneId?: string,
     *     GroupName?: string,
     *     NetworkBorderGroup?: string,
     *     ZoneType?: string,
     *     ParentZoneName?: string,
     *     ParentZoneId?: string,
     *     State?: 'available'|'information'|'impaired'|'unavailable'|'constrained'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
