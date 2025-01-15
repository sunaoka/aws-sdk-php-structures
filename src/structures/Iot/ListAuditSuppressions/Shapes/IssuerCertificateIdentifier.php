<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $issuerCertificateSubject
 * @property string|null $issuerId
 * @property string|null $issuerCertificateSerialNumber
 */
class IssuerCertificateIdentifier extends Shape
{
    /**
     * @param array{
     *     issuerCertificateSubject?: string|null,
     *     issuerId?: string|null,
     *     issuerCertificateSerialNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
