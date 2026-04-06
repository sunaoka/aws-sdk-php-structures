<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfigurationItem|null $cognitoUserPoolConfiguration
 * @property OpenIdConnectConfigurationItem|null $openIdConnectConfiguration
 */
class ConfigurationItem extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: CognitoUserPoolConfigurationItem|null,
     *     openIdConnectConfiguration?: OpenIdConnectConfigurationItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
