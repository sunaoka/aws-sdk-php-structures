<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string|null $clientRequestToken
 */
class CreateCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
