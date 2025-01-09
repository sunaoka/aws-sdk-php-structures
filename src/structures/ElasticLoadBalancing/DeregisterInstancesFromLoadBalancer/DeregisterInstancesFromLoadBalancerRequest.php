<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeregisterInstancesFromLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<Shapes\Instance> $Instances
 */
class DeregisterInstancesFromLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     Instances: list<Shapes\Instance>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
