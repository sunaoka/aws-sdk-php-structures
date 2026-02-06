<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthUpdate|null $oAuthUpdate
 * @property GeneralAuthorizationUpdate|null $GeneralAuthorizationUpdate
 */
class AuthConfigUpdate extends Shape
{
    /**
     * @param array{
     *     oAuthUpdate?: OAuthUpdate|null,
     *     GeneralAuthorizationUpdate?: GeneralAuthorizationUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
