<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OidcIdentityProviderConfig $oidc
 */
class IdentityProviderConfigResponse extends Shape
{
    /**
     * @param array{oidc?: OidcIdentityProviderConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
