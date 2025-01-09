<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteLoadBalancerTlsCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property string $certificateName
 * @property bool $force
 */
class DeleteLoadBalancerTlsCertificateRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     certificateName: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
