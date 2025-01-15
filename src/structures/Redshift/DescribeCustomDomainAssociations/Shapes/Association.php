<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomDomainCertificateArn
 * @property \Aws\Api\DateTimeResult|null $CustomDomainCertificateExpiryDate
 * @property list<CertificateAssociation>|null $CertificateAssociations
 */
class Association extends Shape
{
    /**
     * @param array{
     *     CustomDomainCertificateArn?: string|null,
     *     CustomDomainCertificateExpiryDate?: \Aws\Api\DateTimeResult|null,
     *     CertificateAssociations?: list<CertificateAssociation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
