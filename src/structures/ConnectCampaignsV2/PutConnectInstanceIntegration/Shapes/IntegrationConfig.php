<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProfilesIntegrationConfig|null $customerProfiles
 * @property QConnectIntegrationConfig|null $qConnect
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{
     *     customerProfiles?: CustomerProfilesIntegrationConfig|null,
     *     qConnect?: QConnectIntegrationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
