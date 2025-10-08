<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthConfig|null $oAuth
 */
class AuthConfig extends Shape
{
    /**
     * @param array{oAuth?: OAuthConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
