<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisNumberFilter> $failedChecksFilters
 * @property list<CisStringFilter> $scanArnFilters
 * @property list<CisDateFilter> $scanAtFilters
 * @property list<CisStringFilter> $scanConfigurationArnFilters
 * @property list<CisStringFilter> $scanNameFilters
 * @property list<CisScanStatusFilter> $scanStatusFilters
 * @property list<CisStringFilter> $scheduledByFilters
 * @property list<CisStringFilter> $targetAccountIdFilters
 * @property list<CisStringFilter> $targetResourceIdFilters
 * @property list<TagFilter> $targetResourceTagFilters
 */
class ListCisScansFilterCriteria extends Shape
{
    /**
     * @param array{
     *     failedChecksFilters?: list<CisNumberFilter>,
     *     scanArnFilters?: list<CisStringFilter>,
     *     scanAtFilters?: list<CisDateFilter>,
     *     scanConfigurationArnFilters?: list<CisStringFilter>,
     *     scanNameFilters?: list<CisStringFilter>,
     *     scanStatusFilters?: list<CisScanStatusFilter>,
     *     scheduledByFilters?: list<CisStringFilter>,
     *     targetAccountIdFilters?: list<CisStringFilter>,
     *     targetResourceIdFilters?: list<CisStringFilter>,
     *     targetResourceTagFilters?: list<TagFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
