<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\EnableAvailabilityZonesForLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<string> $AvailabilityZones
 */
class EnableAvailabilityZonesForLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     AvailabilityZones: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
