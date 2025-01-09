<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $continentCode
 * @property string $description
 * @property string $displayName
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1' $name
 * @property list<AvailabilityZone> $availabilityZones
 * @property list<AvailabilityZone> $relationalDatabaseAvailabilityZones
 */
class Region extends Shape
{
    /**
     * @param array{
     *     continentCode?: string,
     *     description?: string,
     *     displayName?: string,
     *     name?: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1',
     *     availabilityZones?: list<AvailabilityZone>,
     *     relationalDatabaseAvailabilityZones?: list<AvailabilityZone>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
