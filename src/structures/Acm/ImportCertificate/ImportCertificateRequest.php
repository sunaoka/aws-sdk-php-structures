<?php

namespace Sunaoka\Aws\Structures\Acm\ImportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string $Certificate
 * @property string $PrivateKey
 * @property string $CertificateChain
 * @property list<Shapes\Tag> $Tags
 */
class ImportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     Certificate: string,
     *     PrivateKey: string,
     *     CertificateChain?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
