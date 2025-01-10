<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ImportCertificateAuthorityCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Certificate
 * @property string|resource|\Psr\Http\Message\StreamInterface $CertificateChain
 */
class ImportCertificateAuthorityCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     Certificate: string|resource|\Psr\Http\Message\StreamInterface,
     *     CertificateChain?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
