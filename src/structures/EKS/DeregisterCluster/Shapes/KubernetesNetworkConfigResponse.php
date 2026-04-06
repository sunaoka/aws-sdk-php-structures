<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceIpv4Cidr
 * @property string|null $serviceIpv6Cidr
 * @property 'ipv4'|'ipv6'|null $ipFamily
 * @property ElasticLoadBalancing|null $elasticLoadBalancing
 */
class KubernetesNetworkConfigResponse extends Shape
{
    /**
     * @param array{
     *     serviceIpv4Cidr?: string|null,
     *     serviceIpv6Cidr?: string|null,
     *     ipFamily?: 'ipv4'|'ipv6'|null,
     *     elasticLoadBalancing?: ElasticLoadBalancing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
