<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $CertificateId
 * @property 'SIGNING'|'ENCRYPTION'|'TLS'|null $Usage
 * @property 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE'|null $Status
 * @property string|null $Certificate
 * @property string|null $CertificateChain
 * @property \Aws\Api\DateTimeResult|null $ActiveDate
 * @property \Aws\Api\DateTimeResult|null $InactiveDate
 * @property string|null $Serial
 * @property \Aws\Api\DateTimeResult|null $NotBeforeDate
 * @property \Aws\Api\DateTimeResult|null $NotAfterDate
 * @property 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY'|null $Type
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class DescribedCertificate extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CertificateId?: string|null,
     *     Usage?: 'SIGNING'|'ENCRYPTION'|'TLS'|null,
     *     Status?: 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE'|null,
     *     Certificate?: string|null,
     *     CertificateChain?: string|null,
     *     ActiveDate?: \Aws\Api\DateTimeResult|null,
     *     InactiveDate?: \Aws\Api\DateTimeResult|null,
     *     Serial?: string|null,
     *     NotBeforeDate?: \Aws\Api\DateTimeResult|null,
     *     NotAfterDate?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY'|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
