<?php

namespace Sunaoka\Aws\Structures\Acm\RevokeCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'SUPERSEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE' $RevocationReason
 */
class RevokeCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     RevocationReason: 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'SUPERSEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
