<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfigurationDetail|null $cognitoUserPoolConfiguration
 * @property OpenIdConnectConfigurationDetail|null $openIdConnectConfiguration
 */
class ConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: CognitoUserPoolConfigurationDetail|null,
     *     openIdConnectConfiguration?: OpenIdConnectConfigurationDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
