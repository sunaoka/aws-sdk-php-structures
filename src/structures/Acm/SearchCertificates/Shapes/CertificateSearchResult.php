<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property X509Attributes|null $X509Attributes
 * @property CertificateMetadata|null $CertificateMetadata
 */
class CertificateSearchResult extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     X509Attributes?: X509Attributes|null,
     *     CertificateMetadata?: CertificateMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
