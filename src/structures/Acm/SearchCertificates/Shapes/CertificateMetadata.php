<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AcmCertificateMetadata|null $AcmCertificateMetadata
 */
class CertificateMetadata extends Shape
{
    /**
     * @param array{AcmCertificateMetadata?: AcmCertificateMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
