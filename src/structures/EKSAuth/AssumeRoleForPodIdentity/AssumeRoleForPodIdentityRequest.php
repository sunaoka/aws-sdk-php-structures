<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $token
 * @property string|null $eksNodeName
 * @property string|null $instanceId
 * @property string|null $zone
 */
class AssumeRoleForPodIdentityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     token: string,
     *     eksNodeName?: string|null,
     *     instanceId?: string|null,
     *     zone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
