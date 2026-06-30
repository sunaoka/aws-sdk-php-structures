<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'RSA_2048'|'EC_prime256v1'|'EC_secp384r1'>|null $AllowedKeyAlgorithms
 */
class PublicCertificateAuthority extends Shape
{
    /**
     * @param array{AllowedKeyAlgorithms?: list<'RSA_2048'|'EC_prime256v1'|'EC_secp384r1'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
