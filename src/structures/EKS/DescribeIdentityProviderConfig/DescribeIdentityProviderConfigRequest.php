<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property Shapes\IdentityProviderConfig $identityProviderConfig
 */
class DescribeIdentityProviderConfigRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     identityProviderConfig: Shapes\IdentityProviderConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
