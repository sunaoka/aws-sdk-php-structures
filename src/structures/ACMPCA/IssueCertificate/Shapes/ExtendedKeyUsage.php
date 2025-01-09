<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVER_AUTH'|'CLIENT_AUTH'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'SMART_CARD_LOGIN'|'DOCUMENT_SIGNING'|'CERTIFICATE_TRANSPARENCY' $ExtendedKeyUsageType
 * @property string $ExtendedKeyUsageObjectIdentifier
 */
class ExtendedKeyUsage extends Shape
{
    /**
     * @param array{
     *     ExtendedKeyUsageType?: 'SERVER_AUTH'|'CLIENT_AUTH'|'CODE_SIGNING'|'EMAIL_PROTECTION'|'TIME_STAMPING'|'OCSP_SIGNING'|'SMART_CARD_LOGIN'|'DOCUMENT_SIGNING'|'CERTIFICATE_TRANSPARENCY',
     *     ExtendedKeyUsageObjectIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
