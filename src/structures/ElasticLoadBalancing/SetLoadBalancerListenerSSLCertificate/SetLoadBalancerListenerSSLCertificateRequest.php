<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\SetLoadBalancerListenerSSLCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property int $LoadBalancerPort
 * @property string $SSLCertificateId
 */
class SetLoadBalancerListenerSSLCertificateRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     LoadBalancerPort: int,
     *     SSLCertificateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
