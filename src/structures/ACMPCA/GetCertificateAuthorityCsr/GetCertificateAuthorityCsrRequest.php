<?php

namespace Sunaoka\Aws\Structures\ACMPCA\GetCertificateAuthorityCsr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 */
class GetCertificateAuthorityCsrRequest extends Request
{
    /**
     * @param array{CertificateAuthorityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
