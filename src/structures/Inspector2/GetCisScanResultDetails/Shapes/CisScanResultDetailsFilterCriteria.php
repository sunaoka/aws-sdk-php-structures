<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisFindingStatusFilter>|null $findingStatusFilters
 * @property list<CisStringFilter>|null $checkIdFilters
 * @property list<CisStringFilter>|null $titleFilters
 * @property list<CisSecurityLevelFilter>|null $securityLevelFilters
 * @property list<CisStringFilter>|null $findingArnFilters
 */
class CisScanResultDetailsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     findingStatusFilters?: list<CisFindingStatusFilter>|null,
     *     checkIdFilters?: list<CisStringFilter>|null,
     *     titleFilters?: list<CisStringFilter>|null,
     *     securityLevelFilters?: list<CisSecurityLevelFilter>|null,
     *     findingArnFilters?: list<CisStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
