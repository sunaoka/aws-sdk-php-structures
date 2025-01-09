<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter> $accountIdFilters
 * @property list<CisStringFilter> $checkIdFilters
 * @property list<CisNumberFilter> $failedChecksFilters
 * @property list<CisStringFilter> $platformFilters
 * @property list<CisResultStatusFilter> $statusFilters
 * @property list<CisStringFilter> $targetResourceIdFilters
 * @property list<TagFilter> $targetResourceTagFilters
 * @property list<CisTargetStatusFilter> $targetStatusFilters
 * @property list<CisTargetStatusReasonFilter> $targetStatusReasonFilters
 */
class CisScanResultsAggregatedByTargetResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountIdFilters?: list<CisStringFilter>,
     *     checkIdFilters?: list<CisStringFilter>,
     *     failedChecksFilters?: list<CisNumberFilter>,
     *     platformFilters?: list<CisStringFilter>,
     *     statusFilters?: list<CisResultStatusFilter>,
     *     targetResourceIdFilters?: list<CisStringFilter>,
     *     targetResourceTagFilters?: list<TagFilter>,
     *     targetStatusFilters?: list<CisTargetStatusFilter>,
     *     targetStatusReasonFilters?: list<CisTargetStatusReasonFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
