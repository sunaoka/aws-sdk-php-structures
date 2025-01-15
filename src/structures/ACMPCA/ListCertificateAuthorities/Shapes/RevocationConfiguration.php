<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrlConfiguration|null $CrlConfiguration
 * @property OcspConfiguration|null $OcspConfiguration
 */
class RevocationConfiguration extends Shape
{
    /**
     * @param array{
     *     CrlConfiguration?: CrlConfiguration|null,
     *     OcspConfiguration?: OcspConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
