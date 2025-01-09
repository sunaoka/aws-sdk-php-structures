<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceIpv4Cidr
 * @property 'ipv4'|'ipv6' $ipFamily
 * @property ElasticLoadBalancing $elasticLoadBalancing
 */
class KubernetesNetworkConfigRequest extends Shape
{
    /**
     * @param array{
     *     serviceIpv4Cidr?: string,
     *     ipFamily?: 'ipv4'|'ipv6',
     *     elasticLoadBalancing?: ElasticLoadBalancing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
