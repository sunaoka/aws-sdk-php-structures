<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientRootCertificateChain
 */
class CertificateAuthentication extends Shape
{
    /**
     * @param array{ClientRootCertificateChain?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
