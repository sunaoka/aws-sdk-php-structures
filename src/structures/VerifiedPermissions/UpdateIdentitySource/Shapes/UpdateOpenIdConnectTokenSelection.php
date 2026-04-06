<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateOpenIdConnectAccessTokenConfiguration|null $accessTokenOnly
 * @property UpdateOpenIdConnectIdentityTokenConfiguration|null $identityTokenOnly
 */
class UpdateOpenIdConnectTokenSelection extends Shape
{
    /**
     * @param array{
     *     accessTokenOnly?: UpdateOpenIdConnectAccessTokenConfiguration|null,
     *     identityTokenOnly?: UpdateOpenIdConnectIdentityTokenConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
