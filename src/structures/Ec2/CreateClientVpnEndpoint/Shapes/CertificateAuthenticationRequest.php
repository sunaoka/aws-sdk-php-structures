<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientRootCertificateChainArn
 */
class CertificateAuthenticationRequest extends Shape
{
    /**
     * @param array{ClientRootCertificateChainArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
