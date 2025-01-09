<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachLoadBalancerTlsCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property string $certificateName
 */
class AttachLoadBalancerTlsCertificateRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     certificateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
