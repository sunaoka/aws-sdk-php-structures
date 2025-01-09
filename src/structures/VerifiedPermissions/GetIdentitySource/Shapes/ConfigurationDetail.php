<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfigurationDetail $cognitoUserPoolConfiguration
 * @property OpenIdConnectConfigurationDetail $openIdConnectConfiguration
 */
class ConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     cognitoUserPoolConfiguration?: CognitoUserPoolConfigurationDetail,
     *     openIdConnectConfiguration?: OpenIdConnectConfigurationDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
