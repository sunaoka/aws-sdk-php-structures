<?php

namespace Sunaoka\Aws\Structures\Acm\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Certificate
 * @property string|resource|\Psr\Http\Message\StreamInterface $PrivateKey
 * @property string|resource|\Psr\Http\Message\StreamInterface $CertificateChain
 * @property list<Shapes\Tag> $Tags
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     Certificate: string|resource|\Psr\Http\Message\StreamInterface,
     *     PrivateKey: string|resource|\Psr\Http\Message\StreamInterface,
     *     CertificateChain?: string|resource|\Psr\Http\Message\StreamInterface,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
