<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenIdConnectAccessTokenConfigurationDetail|null $accessTokenOnly
 * @property OpenIdConnectIdentityTokenConfigurationDetail|null $identityTokenOnly
 */
class OpenIdConnectTokenSelectionDetail extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: OpenIdConnectAccessTokenConfigurationDetail|null,
     *     identityTokenOnly?: OpenIdConnectIdentityTokenConfigurationDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
