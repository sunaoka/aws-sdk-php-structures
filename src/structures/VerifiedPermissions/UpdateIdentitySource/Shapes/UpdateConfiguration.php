<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCognitoUserPoolConfiguration|null $cognitoUserPoolConfiguration
 * @property UpdateOpenIdConnectConfiguration|null $openIdConnectConfiguration
 */
class UpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: UpdateCognitoUserPoolConfiguration|null,
     *     openIdConnectConfiguration?: UpdateOpenIdConnectConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
