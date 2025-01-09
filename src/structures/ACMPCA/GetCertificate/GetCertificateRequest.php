<?php

namespace Sunaoka\Aws\Structures\ACMPCA\GetCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $CertificateArn
 */
class GetCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     CertificateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
