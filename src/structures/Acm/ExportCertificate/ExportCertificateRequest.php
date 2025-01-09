<?php

namespace Sunaoka\Aws\Structures\Acm\ExportCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string $Passphrase
 */
class ExportCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Passphrase: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
