<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $certificateAuthorityId
 * @property string|null $clientRequestToken
 */
class DeleteCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     certificateAuthorityId: string,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
