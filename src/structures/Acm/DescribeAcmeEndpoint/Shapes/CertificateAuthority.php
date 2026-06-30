<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicCertificateAuthority|null $PublicCertificateAuthority
 */
class CertificateAuthority extends Shape
{
    /**
     * @param array{PublicCertificateAuthority?: PublicCertificateAuthority|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
