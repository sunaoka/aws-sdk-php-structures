<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter> $checkIdFilters
 * @property list<CisStringFilter> $findingArnFilters
 * @property list<CisFindingStatusFilter> $findingStatusFilters
 * @property list<CisSecurityLevelFilter> $securityLevelFilters
 * @property list<CisStringFilter> $titleFilters
 */
class CisScanResultDetailsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     checkIdFilters?: list<CisStringFilter>,
     *     findingArnFilters?: list<CisStringFilter>,
     *     findingStatusFilters?: list<CisFindingStatusFilter>,
     *     securityLevelFilters?: list<CisSecurityLevelFilter>,
     *     titleFilters?: list<CisStringFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
