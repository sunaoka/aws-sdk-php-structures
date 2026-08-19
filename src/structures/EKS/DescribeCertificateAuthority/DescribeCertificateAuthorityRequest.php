<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $certificateAuthorityId
 */
class DescribeCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     certificateAuthorityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
