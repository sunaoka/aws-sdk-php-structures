<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $accountIdFilters
 * @property list<CisStringFilter>|null $checkIdFilters
 * @property list<CisNumberFilter>|null $failedResourcesFilters
 * @property list<CisStringFilter>|null $platformFilters
 * @property list<CisSecurityLevelFilter>|null $securityLevelFilters
 * @property list<CisStringFilter>|null $titleFilters
 */
class CisScanResultsAggregatedByChecksFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountIdFilters?: list<CisStringFilter>|null,
     *     checkIdFilters?: list<CisStringFilter>|null,
     *     failedResourcesFilters?: list<CisNumberFilter>|null,
     *     platformFilters?: list<CisStringFilter>|null,
     *     securityLevelFilters?: list<CisSecurityLevelFilter>|null,
     *     titleFilters?: list<CisStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
