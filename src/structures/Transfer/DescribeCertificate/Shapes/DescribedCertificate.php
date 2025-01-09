<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CertificateId
 * @property 'SIGNING'|'ENCRYPTION'|'TLS' $Usage
 * @property 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE' $Status
 * @property string $Certificate
 * @property string $CertificateChain
 * @property \Aws\Api\DateTimeResult $ActiveDate
 * @property \Aws\Api\DateTimeResult $InactiveDate
 * @property string $Serial
 * @property \Aws\Api\DateTimeResult $NotBeforeDate
 * @property \Aws\Api\DateTimeResult $NotAfterDate
 * @property 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY' $Type
 * @property string $Description
 * @property list<Tag> $Tags
 */
class DescribedCertificate extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CertificateId?: string,
     *     Usage?: 'SIGNING'|'ENCRYPTION'|'TLS',
     *     Status?: 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE',
     *     Certificate?: string,
     *     CertificateChain?: string,
     *     ActiveDate?: \Aws\Api\DateTimeResult,
     *     InactiveDate?: \Aws\Api\DateTimeResult,
     *     Serial?: string,
     *     NotBeforeDate?: \Aws\Api\DateTimeResult,
     *     NotAfterDate?: \Aws\Api\DateTimeResult,
     *     Type?: 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY',
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
