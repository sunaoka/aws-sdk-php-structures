<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCognitoUserPoolConfiguration $cognitoUserPoolConfiguration
 * @property UpdateOpenIdConnectConfiguration $openIdConnectConfiguration
 */
class UpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: UpdateCognitoUserPoolConfiguration,
     *     openIdConnectConfiguration?: UpdateOpenIdConnectConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
