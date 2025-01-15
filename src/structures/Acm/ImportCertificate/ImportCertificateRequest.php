<?php

namespace Sunaoka\Aws\Structures\Acm\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CertificateArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Certificate
 * @property string|resource|\Psr\Http\Message\StreamInterface $PrivateKey
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CertificateChain
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     Certificate: string|resource|\Psr\Http\Message\StreamInterface,
     *     PrivateKey: string|resource|\Psr\Http\Message\StreamInterface,
     *     CertificateChain?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
