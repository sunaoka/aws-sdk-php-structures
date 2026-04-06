<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceIpv4Cidr
 * @property 'ipv4'|'ipv6'|null $ipFamily
 * @property ElasticLoadBalancing|null $elasticLoadBalancing
 */
class KubernetesNetworkConfigRequest extends Shape
{
    /**
     * @param array{
     *     serviceIpv4Cidr?: string|null,
     *     ipFamily?: 'ipv4'|'ipv6'|null,
     *     elasticLoadBalancing?: ElasticLoadBalancing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
