<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\StartRevenueAttributionAllocationsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $RevenueAttributionIdentifier
 * @property string $RevenueAttributionRevision
 * @property list<Shapes\RevenueShareAllocation> $RevenueShareAllocations
 * @property string|null $ClientToken
 * @property string|null $Description
 */
class StartRevenueAttributionAllocationsTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     RevenueAttributionIdentifier: string,
     *     RevenueAttributionRevision: string,
     *     RevenueShareAllocations: list<Shapes\RevenueShareAllocation>,
     *     ClientToken?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
