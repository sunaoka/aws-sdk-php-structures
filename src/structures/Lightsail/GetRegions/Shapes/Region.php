<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $continentCode
 * @property string|null $description
 * @property string|null $displayName
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'|'ap-southeast-3'|null $name
 * @property list<AvailabilityZone>|null $availabilityZones
 * @property list<AvailabilityZone>|null $relationalDatabaseAvailabilityZones
 */
class Region extends Shape
{
    /**
     * @param array{
     *     continentCode?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     name?: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'|'ap-southeast-3'|null,
     *     availabilityZones?: list<AvailabilityZone>|null,
     *     relationalDatabaseAvailabilityZones?: list<AvailabilityZone>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
