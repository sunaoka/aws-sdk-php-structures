<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProfilesIntegrationIdentifier|null $customerProfiles
 * @property QConnectIntegrationIdentifier|null $qConnect
 * @property LambdaIntegrationIdentifier|null $lambda
 */
class IntegrationIdentifier extends Shape
{
    /**
     * @param array{
     *     customerProfiles?: CustomerProfilesIntegrationIdentifier|null,
     *     qConnect?: QConnectIntegrationIdentifier|null,
     *     lambda?: LambdaIntegrationIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
