<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStoreCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustStoreArn
 * @property string $thumbprint
 */
class GetTrustStoreCertificateRequest extends Request
{
    /**
     * @param array{
     *     trustStoreArn: string,
     *     thumbprint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
