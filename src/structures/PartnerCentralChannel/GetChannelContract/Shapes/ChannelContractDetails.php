<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\GetChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedServicesAttestationDetails|null $managedServicesAttestationDetails
 */
class ChannelContractDetails extends Shape
{
    /**
     * @param array{managedServicesAttestationDetails?: ManagedServicesAttestationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
