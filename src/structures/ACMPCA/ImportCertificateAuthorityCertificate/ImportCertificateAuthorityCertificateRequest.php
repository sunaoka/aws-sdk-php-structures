<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ImportCertificateAuthorityCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $Certificate
 * @property string $CertificateChain
 */
class ImportCertificateAuthorityCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     Certificate: string,
     *     CertificateChain?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
