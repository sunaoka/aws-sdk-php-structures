<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenIdConnectAccessTokenConfigurationItem|null $accessTokenOnly
 * @property OpenIdConnectIdentityTokenConfigurationItem|null $identityTokenOnly
 */
class OpenIdConnectTokenSelectionItem extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: OpenIdConnectAccessTokenConfigurationItem|null,
     *     identityTokenOnly?: OpenIdConnectIdentityTokenConfigurationItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
