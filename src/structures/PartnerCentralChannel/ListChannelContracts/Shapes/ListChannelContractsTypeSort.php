<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedServicesAttestationTypeSort|null $managedServicesAttestationTypeSort
 */
class ListChannelContractsTypeSort extends Shape
{
    /**
     * @param array{managedServicesAttestationTypeSort?: ManagedServicesAttestationTypeSort|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
