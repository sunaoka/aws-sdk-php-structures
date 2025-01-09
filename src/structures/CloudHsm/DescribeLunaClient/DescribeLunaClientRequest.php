<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeLunaClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientArn
 * @property string $CertificateFingerprint
 */
class DescribeLunaClientRequest extends Request
{
    /**
     * @param array{
     *     ClientArn?: string,
     *     CertificateFingerprint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
