<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAuditSuppression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuerCertificateSubject
 * @property string $issuerId
 * @property string $issuerCertificateSerialNumber
 */
class IssuerCertificateIdentifier extends Shape
{
    /**
     * @param array{
     *     issuerCertificateSubject?: string,
     *     issuerId?: string,
     *     issuerCertificateSerialNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
