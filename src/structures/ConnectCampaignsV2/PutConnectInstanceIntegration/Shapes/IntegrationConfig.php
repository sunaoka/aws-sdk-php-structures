<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProfilesIntegrationConfig $customerProfiles
 * @property QConnectIntegrationConfig $qConnect
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{
     *     customerProfiles?: CustomerProfilesIntegrationConfig,
     *     qConnect?: QConnectIntegrationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
