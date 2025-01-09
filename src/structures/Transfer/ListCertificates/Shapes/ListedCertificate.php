<?php

namespace Sunaoka\Aws\Structures\Transfer\ListCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CertificateId
 * @property 'SIGNING'|'ENCRYPTION'|'TLS' $Usage
 * @property 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $ActiveDate
 * @property \Aws\Api\DateTimeResult $InactiveDate
 * @property 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY' $Type
 * @property string $Description
 */
class ListedCertificate extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CertificateId?: string,
     *     Usage?: 'SIGNING'|'ENCRYPTION'|'TLS',
     *     Status?: 'ACTIVE'|'PENDING_ROTATION'|'INACTIVE',
     *     ActiveDate?: \Aws\Api\DateTimeResult,
     *     InactiveDate?: \Aws\Api\DateTimeResult,
     *     Type?: 'CERTIFICATE'|'CERTIFICATE_WITH_PRIVATE_KEY',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
