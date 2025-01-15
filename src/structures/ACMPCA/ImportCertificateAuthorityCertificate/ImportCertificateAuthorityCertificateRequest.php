<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ImportCertificateAuthorityCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Certificate
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CertificateChain
 */
class ImportCertificateAuthorityCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     Certificate: string|resource|\Psr\Http\Message\StreamInterface,
     *     CertificateChain?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
