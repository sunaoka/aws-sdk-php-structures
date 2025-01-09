<?php

namespace Sunaoka\Aws\Structures\Acm\GetCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 */
class GetCertificateRequest extends Request
{
    /**
     * @param array{CertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
