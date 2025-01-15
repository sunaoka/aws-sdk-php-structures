<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $checkIdFilters
 * @property list<CisStringFilter>|null $findingArnFilters
 * @property list<CisFindingStatusFilter>|null $findingStatusFilters
 * @property list<CisSecurityLevelFilter>|null $securityLevelFilters
 * @property list<CisStringFilter>|null $titleFilters
 */
class CisScanResultDetailsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     checkIdFilters?: list<CisStringFilter>|null,
     *     findingArnFilters?: list<CisStringFilter>|null,
     *     findingStatusFilters?: list<CisFindingStatusFilter>|null,
     *     securityLevelFilters?: list<CisSecurityLevelFilter>|null,
     *     titleFilters?: list<CisStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
