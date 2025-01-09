<?php

namespace Sunaoka\Aws\Structures\ACMPCA\GetCertificateAuthorityCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 */
class GetCertificateAuthorityCertificateRequest extends Request
{
    /**
     * @param array{CertificateAuthorityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
