<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProfilesIntegrationSummary|null $customerProfiles
 * @property QConnectIntegrationSummary|null $qConnect
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     customerProfiles?: CustomerProfilesIntegrationSummary|null,
     *     qConnect?: QConnectIntegrationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
