<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Protocol
 * @property int $LoadBalancerPort
 * @property string|null $InstanceProtocol
 * @property int<1, 65535> $InstancePort
 * @property string|null $SSLCertificateId
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     Protocol: string,
     *     LoadBalancerPort: int,
     *     InstanceProtocol?: string|null,
     *     InstancePort: int<1, 65535>,
     *     SSLCertificateId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
