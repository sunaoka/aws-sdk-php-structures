<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Protocol
 * @property int $LoadBalancerPort
 * @property string $InstanceProtocol
 * @property int $InstancePort
 * @property string $SSLCertificateId
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     Protocol: string,
     *     LoadBalancerPort: int,
     *     InstanceProtocol?: string,
     *     InstancePort: int,
     *     SSLCertificateId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
