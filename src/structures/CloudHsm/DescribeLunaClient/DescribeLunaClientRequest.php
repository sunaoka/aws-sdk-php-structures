<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeLunaClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientArn
 * @property string|null $CertificateFingerprint
 */
class DescribeLunaClientRequest extends Request
{
    /**
     * @param array{
     *     ClientArn?: string|null,
     *     CertificateFingerprint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
