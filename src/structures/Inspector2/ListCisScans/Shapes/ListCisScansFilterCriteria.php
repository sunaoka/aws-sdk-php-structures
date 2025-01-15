<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisNumberFilter>|null $failedChecksFilters
 * @property list<CisStringFilter>|null $scanArnFilters
 * @property list<CisDateFilter>|null $scanAtFilters
 * @property list<CisStringFilter>|null $scanConfigurationArnFilters
 * @property list<CisStringFilter>|null $scanNameFilters
 * @property list<CisScanStatusFilter>|null $scanStatusFilters
 * @property list<CisStringFilter>|null $scheduledByFilters
 * @property list<CisStringFilter>|null $targetAccountIdFilters
 * @property list<CisStringFilter>|null $targetResourceIdFilters
 * @property list<TagFilter>|null $targetResourceTagFilters
 */
class ListCisScansFilterCriteria extends Shape
{
    /**
     * @param array{
     *     failedChecksFilters?: list<CisNumberFilter>|null,
     *     scanArnFilters?: list<CisStringFilter>|null,
     *     scanAtFilters?: list<CisDateFilter>|null,
     *     scanConfigurationArnFilters?: list<CisStringFilter>|null,
     *     scanNameFilters?: list<CisStringFilter>|null,
     *     scanStatusFilters?: list<CisScanStatusFilter>|null,
     *     scheduledByFilters?: list<CisStringFilter>|null,
     *     targetAccountIdFilters?: list<CisStringFilter>|null,
     *     targetResourceIdFilters?: list<CisStringFilter>|null,
     *     targetResourceTagFilters?: list<TagFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
