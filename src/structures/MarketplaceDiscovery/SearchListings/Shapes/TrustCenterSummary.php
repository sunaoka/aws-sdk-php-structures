<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TrustCenterSourceSummary> $sourceSummaries
 * @property list<TrustCenterCertificationSummary> $certificationSummaries
 * @property int<0, max> $totalCertificationCount
 */
class TrustCenterSummary extends Shape
{
    /**
     * @param array{
     *     sourceSummaries: list<TrustCenterSourceSummary>,
     *     certificationSummaries: list<TrustCenterCertificationSummary>,
     *     totalCertificationCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
