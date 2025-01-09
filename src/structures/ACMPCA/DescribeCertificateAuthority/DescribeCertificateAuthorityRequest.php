<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 */
class DescribeCertificateAuthorityRequest extends Request
{
    /**
     * @param array{CertificateAuthorityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
