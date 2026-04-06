<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authUrl
 * @property string $tokenUrl
 * @property string|null $scope
 * @property 'HTTP_BASIC'|'REQUEST_BODY_CREDENTIALS' $tokenEndpointAuthenticationScheme
 * @property string|null $oAuthCompleteRedirectUrl
 * @property ProactiveRefreshTokenRenewal|null $proactiveRefreshTokenRenewal
 */
class OAuthConfig extends Shape
{
    /**
     * @param array{
     *     authUrl: string,
     *     tokenUrl: string,
     *     scope?: string|null,
     *     tokenEndpointAuthenticationScheme: 'HTTP_BASIC'|'REQUEST_BODY_CREDENTIALS',
     *     oAuthCompleteRedirectUrl?: string|null,
     *     proactiveRefreshTokenRenewal?: ProactiveRefreshTokenRenewal|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
