<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthConfig|null $oAuth
 * @property list<AuthMaterial>|null $GeneralAuthorization
 */
class AuthConfig extends Shape
{
    /**
     * @param array{
     *     oAuth?: OAuthConfig|null,
     *     GeneralAuthorization?: list<AuthMaterial>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
