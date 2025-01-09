<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfiguration $cognitoUserPoolConfiguration
 * @property OpenIdConnectConfiguration $openIdConnectConfiguration
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: CognitoUserPoolConfiguration,
     *     openIdConnectConfiguration?: OpenIdConnectConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
