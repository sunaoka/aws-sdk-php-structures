<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $oAuthCompleteRedirectUrl
 * @property ProactiveRefreshTokenRenewal|null $proactiveRefreshTokenRenewal
 */
class OAuthUpdate extends Shape
{
    /**
     * @param array{
     *     oAuthCompleteRedirectUrl?: string|null,
     *     proactiveRefreshTokenRenewal?: ProactiveRefreshTokenRenewal|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
