<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<Shapes\Listener> $Listeners
 * @property list<string> $AvailabilityZones
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroups
 * @property string $Scheme
 * @property list<Shapes\Tag> $Tags
 */
class CreateLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     Listeners: list<Shapes\Listener>,
     *     AvailabilityZones?: list<string>,
     *     Subnets?: list<string>,
     *     SecurityGroups?: list<string>,
     *     Scheme?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
