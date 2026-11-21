<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedServicesAttestationTypeFilters|null $managedServicesAttestationTypeFilters
 */
class ListChannelContractsTypeFilters extends Shape
{
    /**
     * @param array{managedServicesAttestationTypeFilters?: ManagedServicesAttestationTypeFilters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
