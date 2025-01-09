<?php

namespace Sunaoka\Aws\Structures\ACMPCA\RestoreCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 */
class RestoreCertificateAuthorityRequest extends Request
{
    /**
     * @param array{CertificateAuthorityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
