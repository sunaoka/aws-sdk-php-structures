<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteLoadBalancerTlsCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property string $certificateName
 * @property bool|null $force
 */
class DeleteLoadBalancerTlsCertificateRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     certificateName: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
