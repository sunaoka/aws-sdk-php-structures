<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttributionAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $RevenueAttributionIdentifier
 * @property string $RevenueAttributionAllocationId
 * @property string|null $RevenueAttributionRevision
 */
class GetRevenueAttributionAllocationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     RevenueAttributionIdentifier: string,
     *     RevenueAttributionAllocationId: string,
     *     RevenueAttributionRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
