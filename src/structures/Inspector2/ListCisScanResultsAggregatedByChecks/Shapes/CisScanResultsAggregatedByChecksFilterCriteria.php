<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $accountIdFilters
 * @property list<CisStringFilter>|null $checkIdFilters
 * @property list<CisStringFilter>|null $titleFilters
 * @property list<CisStringFilter>|null $platformFilters
 * @property list<CisNumberFilter>|null $failedResourcesFilters
 * @property list<CisSecurityLevelFilter>|null $securityLevelFilters
 */
class CisScanResultsAggregatedByChecksFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountIdFilters?: list<CisStringFilter>|null,
     *     checkIdFilters?: list<CisStringFilter>|null,
     *     titleFilters?: list<CisStringFilter>|null,
     *     platformFilters?: list<CisStringFilter>|null,
     *     failedResourcesFilters?: list<CisNumberFilter>|null,
     *     securityLevelFilters?: list<CisSecurityLevelFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
