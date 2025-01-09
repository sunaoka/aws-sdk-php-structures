<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstancePort
 * @property string $InstanceProtocol
 * @property int $LoadBalancerPort
 * @property string $Protocol
 * @property string $SslCertificateId
 */
class AwsElbLoadBalancerListener extends Shape
{
    /**
     * @param array{
     *     InstancePort?: int,
     *     InstanceProtocol?: string,
     *     LoadBalancerPort?: int,
     *     Protocol?: string,
     *     SslCertificateId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
