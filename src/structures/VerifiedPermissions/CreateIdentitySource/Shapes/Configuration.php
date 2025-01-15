<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfiguration|null $cognitoUserPoolConfiguration
 * @property OpenIdConnectConfiguration|null $openIdConnectConfiguration
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: CognitoUserPoolConfiguration|null,
     *     openIdConnectConfiguration?: OpenIdConnectConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
