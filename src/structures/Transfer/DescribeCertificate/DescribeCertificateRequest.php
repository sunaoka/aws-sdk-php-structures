<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateId
 */
class DescribeCertificateRequest extends Request
{
    /**
     * @param array{CertificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
