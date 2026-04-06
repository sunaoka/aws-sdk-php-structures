<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $scanNameFilters
 * @property list<TagFilter>|null $targetResourceTagFilters
 * @property list<CisStringFilter>|null $targetResourceIdFilters
 * @property list<CisScanStatusFilter>|null $scanStatusFilters
 * @property list<CisDateFilter>|null $scanAtFilters
 * @property list<CisStringFilter>|null $scanConfigurationArnFilters
 * @property list<CisStringFilter>|null $scanArnFilters
 * @property list<CisStringFilter>|null $scheduledByFilters
 * @property list<CisNumberFilter>|null $failedChecksFilters
 * @property list<CisStringFilter>|null $targetAccountIdFilters
 */
class ListCisScansFilterCriteria extends Shape
{
    /**
     * @param array{
     *     scanNameFilters?: list<CisStringFilter>|null,
     *     targetResourceTagFilters?: list<TagFilter>|null,
     *     targetResourceIdFilters?: list<CisStringFilter>|null,
     *     scanStatusFilters?: list<CisScanStatusFilter>|null,
     *     scanAtFilters?: list<CisDateFilter>|null,
     *     scanConfigurationArnFilters?: list<CisStringFilter>|null,
     *     scanArnFilters?: list<CisStringFilter>|null,
     *     scheduledByFilters?: list<CisStringFilter>|null,
     *     failedChecksFilters?: list<CisNumberFilter>|null,
     *     targetAccountIdFilters?: list<CisStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
