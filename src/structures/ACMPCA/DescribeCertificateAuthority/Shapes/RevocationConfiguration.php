<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrlConfiguration $CrlConfiguration
 * @property OcspConfiguration $OcspConfiguration
 */
class RevocationConfiguration extends Shape
{
    /**
     * @param array{
     *     CrlConfiguration?: CrlConfiguration,
     *     OcspConfiguration?: OcspConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
