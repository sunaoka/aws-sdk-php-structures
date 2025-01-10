<?php

namespace Sunaoka\Aws\Structures\Acm\ExportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Passphrase
 */
class ExportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Passphrase: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
