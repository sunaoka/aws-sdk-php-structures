<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenIdConnectAccessTokenConfigurationDetail $accessTokenOnly
 * @property OpenIdConnectIdentityTokenConfigurationDetail $identityTokenOnly
 */
class OpenIdConnectTokenSelectionDetail extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: OpenIdConnectAccessTokenConfigurationDetail,
     *     identityTokenOnly?: OpenIdConnectIdentityTokenConfigurationDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
