<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'opt-in-not-required'|'opted-in'|'not-opted-in'|null $OptInStatus
 * @property list<AvailabilityZoneMessage>|null $Messages
 * @property string|null $RegionName
 * @property string|null $ZoneName
 * @property string|null $ZoneId
 * @property string|null $GroupName
 * @property string|null $NetworkBorderGroup
 * @property string|null $ZoneType
 * @property string|null $ParentZoneName
 * @property string|null $ParentZoneId
 * @property 'available'|'information'|'impaired'|'unavailable'|'constrained'|null $State
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     OptInStatus?: 'opt-in-not-required'|'opted-in'|'not-opted-in'|null,
     *     Messages?: list<AvailabilityZoneMessage>|null,
     *     RegionName?: string|null,
     *     ZoneName?: string|null,
     *     ZoneId?: string|null,
     *     GroupName?: string|null,
     *     NetworkBorderGroup?: string|null,
     *     ZoneType?: string|null,
     *     ParentZoneName?: string|null,
     *     ParentZoneId?: string|null,
     *     State?: 'available'|'information'|'impaired'|'unavailable'|'constrained'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
