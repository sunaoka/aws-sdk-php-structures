<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 */
class DescribeCertificateRequest extends Request
{
    /**
     * @param array{CertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
