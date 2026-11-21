<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedServicesAttestationSummaryDetails|null $managedServicesAttestationDetails
 */
class ChannelContractSummaryDetails extends Shape
{
    /**
     * @param array{managedServicesAttestationDetails?: ManagedServicesAttestationSummaryDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
