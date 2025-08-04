<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $accountIdFilters
 * @property list<CisResultStatusFilter>|null $statusFilters
 * @property list<CisStringFilter>|null $checkIdFilters
 * @property list<CisStringFilter>|null $targetResourceIdFilters
 * @property list<TagFilter>|null $targetResourceTagFilters
 * @property list<CisStringFilter>|null $platformFilters
 * @property list<CisTargetStatusFilter>|null $targetStatusFilters
 * @property list<CisTargetStatusReasonFilter>|null $targetStatusReasonFilters
 * @property list<CisNumberFilter>|null $failedChecksFilters
 */
class CisScanResultsAggregatedByTargetResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountIdFilters?: list<CisStringFilter>|null,
     *     statusFilters?: list<CisResultStatusFilter>|null,
     *     checkIdFilters?: list<CisStringFilter>|null,
     *     targetResourceIdFilters?: list<CisStringFilter>|null,
     *     targetResourceTagFilters?: list<TagFilter>|null,
     *     platformFilters?: list<CisStringFilter>|null,
     *     targetStatusFilters?: list<CisTargetStatusFilter>|null,
     *     targetStatusReasonFilters?: list<CisTargetStatusReasonFilter>|null,
     *     failedChecksFilters?: list<CisNumberFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
