<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $acmPcaArn
 * @property string|null $x509CertificateData
 */
class SourceData extends Shape
{
    /**
     * @param array{
     *     acmPcaArn?: string|null,
     *     x509CertificateData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
