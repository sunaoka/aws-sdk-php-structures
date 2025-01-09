<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenIdConnectAccessTokenConfigurationItem $accessTokenOnly
 * @property OpenIdConnectIdentityTokenConfigurationItem $identityTokenOnly
 */
class OpenIdConnectTokenSelectionItem extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: OpenIdConnectAccessTokenConfigurationItem,
     *     identityTokenOnly?: OpenIdConnectIdentityTokenConfigurationItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
