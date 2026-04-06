<?php

namespace Sunaoka\Aws\Structures\Transfer\ListCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CertificateId
 * @property 'SIGNING'|'ENCRYPTION'|'TLS'|null $Usage
 * @property 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $ActiveDate
 * @property \Aws\Api\DateTimeResult|null $InactiveDate
 * @property 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY'|null $Type
 * @property string|null $Description
 */
class ListedCertificate extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CertificateId?: string|null,
     *     Usage?: 'SIGNING'|'ENCRYPTION'|'TLS'|null,
     *     Status?: 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE'|null,
     *     ActiveDate?: \Aws\Api\DateTimeResult|null,
     *     InactiveDate?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
