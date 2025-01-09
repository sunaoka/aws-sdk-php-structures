<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfigurationItem $cognitoUserPoolConfiguration
 * @property OpenIdConnectConfigurationItem $openIdConnectConfiguration
 */
class ConfigurationItem extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: CognitoUserPoolConfigurationItem,
     *     openIdConnectConfiguration?: OpenIdConnectConfigurationItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
