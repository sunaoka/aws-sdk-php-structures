<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientRootCertificateChain
 */
class CertificateAuthentication extends Shape
{
    /**
     * @param array{ClientRootCertificateChain?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
