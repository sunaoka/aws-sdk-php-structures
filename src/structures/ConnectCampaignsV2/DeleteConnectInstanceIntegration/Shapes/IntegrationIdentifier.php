<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProfilesIntegrationIdentifier $customerProfiles
 * @property QConnectIntegrationIdentifier $qConnect
 */
class IntegrationIdentifier extends Shape
{
    /**
     * @param array{
     *     customerProfiles?: CustomerProfilesIntegrationIdentifier,
     *     qConnect?: QConnectIntegrationIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
