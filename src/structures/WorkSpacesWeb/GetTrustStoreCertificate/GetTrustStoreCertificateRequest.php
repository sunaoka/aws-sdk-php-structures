<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStoreCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thumbprint
 * @property string $trustStoreArn
 */
class GetTrustStoreCertificateRequest extends Request
{
    /**
     * @param array{
     *     thumbprint: string,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
