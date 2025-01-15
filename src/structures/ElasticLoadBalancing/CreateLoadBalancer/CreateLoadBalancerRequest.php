<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<Shapes\Listener> $Listeners
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $Subnets
 * @property list<string>|null $SecurityGroups
 * @property string|null $Scheme
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     Listeners: list<Shapes\Listener>,
     *     AvailabilityZones?: list<string>|null,
     *     Subnets?: list<string>|null,
     *     SecurityGroups?: list<string>|null,
     *     Scheme?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
