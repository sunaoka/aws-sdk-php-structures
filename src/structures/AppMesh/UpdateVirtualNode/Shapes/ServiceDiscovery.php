<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudMapServiceDiscovery $awsCloudMap
 * @property DnsServiceDiscovery $dns
 */
class ServiceDiscovery extends Shape
{
    /**
     * @param array{
     *     awsCloudMap?: AwsCloudMapServiceDiscovery,
     *     dns?: DnsServiceDiscovery
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
