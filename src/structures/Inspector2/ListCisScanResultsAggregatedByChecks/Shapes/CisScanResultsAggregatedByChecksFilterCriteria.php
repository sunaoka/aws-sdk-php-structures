<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter> $accountIdFilters
 * @property list<CisStringFilter> $checkIdFilters
 * @property list<CisNumberFilter> $failedResourcesFilters
 * @property list<CisStringFilter> $platformFilters
 * @property list<CisSecurityLevelFilter> $securityLevelFilters
 * @property list<CisStringFilter> $titleFilters
 */
class CisScanResultsAggregatedByChecksFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountIdFilters?: list<CisStringFilter>,
     *     checkIdFilters?: list<CisStringFilter>,
     *     failedResourcesFilters?: list<CisNumberFilter>,
     *     platformFilters?: list<CisStringFilter>,
     *     securityLevelFilters?: list<CisSecurityLevelFilter>,
     *     titleFilters?: list<CisStringFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
