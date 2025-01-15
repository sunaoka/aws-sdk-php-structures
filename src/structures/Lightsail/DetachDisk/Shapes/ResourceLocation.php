<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachDisk\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityZone
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'|null $regionName
 */
class ResourceLocation extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string|null,
     *     regionName?: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
