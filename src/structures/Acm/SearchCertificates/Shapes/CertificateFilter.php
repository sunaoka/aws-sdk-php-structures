<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property X509AttributeFilter|null $X509AttributeFilter
 * @property AcmCertificateMetadataFilter|null $AcmCertificateMetadataFilter
 */
class CertificateFilter extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     X509AttributeFilter?: X509AttributeFilter|null,
     *     AcmCertificateMetadataFilter?: AcmCertificateMetadataFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
