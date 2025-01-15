<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudMapServiceDiscovery|null $awsCloudMap
 * @property DnsServiceDiscovery|null $dns
 */
class ServiceDiscovery extends Shape
{
    /**
     * @param array{
     *     awsCloudMap?: AwsCloudMapServiceDiscovery|null,
     *     dns?: DnsServiceDiscovery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
