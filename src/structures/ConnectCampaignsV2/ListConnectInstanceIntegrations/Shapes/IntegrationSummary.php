<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProfilesIntegrationSummary $customerProfiles
 * @property QConnectIntegrationSummary $qConnect
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     customerProfiles?: CustomerProfilesIntegrationSummary,
     *     qConnect?: QConnectIntegrationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
