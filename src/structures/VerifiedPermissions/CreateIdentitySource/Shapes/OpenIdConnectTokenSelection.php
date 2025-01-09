<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenIdConnectAccessTokenConfiguration $accessTokenOnly
 * @property OpenIdConnectIdentityTokenConfiguration $identityTokenOnly
 */
class OpenIdConnectTokenSelection extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: OpenIdConnectAccessTokenConfiguration,
     *     identityTokenOnly?: OpenIdConnectIdentityTokenConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
