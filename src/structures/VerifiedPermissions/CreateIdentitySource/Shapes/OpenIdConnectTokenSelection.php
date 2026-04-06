<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenIdConnectAccessTokenConfiguration|null $accessTokenOnly
 * @property OpenIdConnectIdentityTokenConfiguration|null $identityTokenOnly
 */
class OpenIdConnectTokenSelection extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: OpenIdConnectAccessTokenConfiguration|null,
     *     identityTokenOnly?: OpenIdConnectIdentityTokenConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
