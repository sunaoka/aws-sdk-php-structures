<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateConnectorDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property int<30, max>|null $DaysBeforeRenewal
 */
class ProactiveRefreshTokenRenewal extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     DaysBeforeRenewal?: int<30, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
