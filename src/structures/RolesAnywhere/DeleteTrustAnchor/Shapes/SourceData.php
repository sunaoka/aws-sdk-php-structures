<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $x509CertificateData
 * @property string|null $acmPcaArn
 */
class SourceData extends Shape
{
    /**
     * @param array{
     *     x509CertificateData?: string|null,
     *     acmPcaArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
