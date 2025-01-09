<?php

namespace Sunaoka\Aws\Structures\Acm\RenewCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 */
class RenewCertificateRequest extends Request
{
    /**
     * @param array{CertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
