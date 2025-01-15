<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstancePort
 * @property string|null $InstanceProtocol
 * @property int|null $LoadBalancerPort
 * @property string|null $Protocol
 * @property string|null $SslCertificateId
 */
class AwsElbLoadBalancerListener extends Shape
{
    /**
     * @param array{
     *     InstancePort?: int|null,
     *     InstanceProtocol?: string|null,
     *     LoadBalancerPort?: int|null,
     *     Protocol?: string|null,
     *     SslCertificateId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
