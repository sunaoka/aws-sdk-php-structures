<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $token
 */
class AssumeRoleForPodIdentityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     token: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
