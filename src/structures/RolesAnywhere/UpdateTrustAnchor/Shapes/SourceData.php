<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $acmPcaArn
 * @property string $x509CertificateData
 */
class SourceData extends Shape
{
    /**
     * @param array{
     *     acmPcaArn?: string,
     *     x509CertificateData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
