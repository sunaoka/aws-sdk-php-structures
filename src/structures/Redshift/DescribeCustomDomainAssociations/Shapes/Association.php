<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomDomainCertificateArn
 * @property \Aws\Api\DateTimeResult $CustomDomainCertificateExpiryDate
 * @property list<CertificateAssociation> $CertificateAssociations
 */
class Association extends Shape
{
    /**
     * @param array{
     *     CustomDomainCertificateArn?: string,
     *     CustomDomainCertificateExpiryDate?: \Aws\Api\DateTimeResult,
     *     CertificateAssociations?: list<CertificateAssociation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
