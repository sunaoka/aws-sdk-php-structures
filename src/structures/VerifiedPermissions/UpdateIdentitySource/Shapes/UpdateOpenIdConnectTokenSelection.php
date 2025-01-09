<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateOpenIdConnectAccessTokenConfiguration $accessTokenOnly
 * @property UpdateOpenIdConnectIdentityTokenConfiguration $identityTokenOnly
 */
class UpdateOpenIdConnectTokenSelection extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: UpdateOpenIdConnectAccessTokenConfiguration,
     *     identityTokenOnly?: UpdateOpenIdConnectIdentityTokenConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
