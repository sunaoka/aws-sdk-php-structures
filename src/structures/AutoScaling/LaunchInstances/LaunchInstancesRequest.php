<?php

namespace Sunaoka\Aws\Structures\AutoScaling\LaunchInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property int<1, max> $RequestedCapacity
 * @property string $ClientToken
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $AvailabilityZoneIds
 * @property list<string>|null $SubnetIds
 * @property 'retry-with-group-configuration'|'none'|null $RetryStrategy
 */
class LaunchInstancesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     RequestedCapacity: int<1, max>,
     *     ClientToken: string,
     *     AvailabilityZones?: list<string>|null,
     *     AvailabilityZoneIds?: list<string>|null,
     *     SubnetIds?: list<string>|null,
     *     RetryStrategy?: 'retry-with-group-configuration'|'none'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
