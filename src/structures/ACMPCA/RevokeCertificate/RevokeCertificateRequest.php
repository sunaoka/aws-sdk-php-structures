<?php

namespace Sunaoka\Aws\Structures\ACMPCA\RevokeCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $CertificateSerial
 * @property 'UNSPECIFIED'|'KEY_COMPROMISE'|'CERTIFICATE_AUTHORITY_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERSEDED'|'CESSATION_OF_OPERATION'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE' $RevocationReason
 */
class RevokeCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     CertificateSerial: string,
     *     RevocationReason: 'UNSPECIFIED'|'KEY_COMPROMISE'|'CERTIFICATE_AUTHORITY_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERSEDED'|'CESSATION_OF_OPERATION'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
