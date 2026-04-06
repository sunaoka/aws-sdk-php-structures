<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $accountIdFilters
 * @property list<CisStringFilter>|null $checkIdFilters
 * @property list<CisNumberFilter>|null $failedChecksFilters
 * @property list<CisStringFilter>|null $platformFilters
 * @property list<CisResultStatusFilter>|null $statusFilters
 * @property list<CisStringFilter>|null $targetResourceIdFilters
 * @property list<TagFilter>|null $targetResourceTagFilters
 * @property list<CisTargetStatusFilter>|null $targetStatusFilters
 * @property list<CisTargetStatusReasonFilter>|null $targetStatusReasonFilters
 */
class CisScanResultsAggregatedByTargetResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountIdFilters?: list<CisStringFilter>|null,
     *     checkIdFilters?: list<CisStringFilter>|null,
     *     failedChecksFilters?: list<CisNumberFilter>|null,
     *     platformFilters?: list<CisStringFilter>|null,
     *     statusFilters?: list<CisResultStatusFilter>|null,
     *     targetResourceIdFilters?: list<CisStringFilter>|null,
     *     targetResourceTagFilters?: list<TagFilter>|null,
     *     targetStatusFilters?: list<CisTargetStatusFilter>|null,
     *     targetStatusReasonFilters?: list<CisTargetStatusReasonFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
