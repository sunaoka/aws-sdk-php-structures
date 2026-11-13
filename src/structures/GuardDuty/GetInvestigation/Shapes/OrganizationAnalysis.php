<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationFindingsSummary|null $FindingsSummary
 * @property list<AccountSummary>|null $AccountBreakdown
 */
class OrganizationAnalysis extends Shape
{
    /**
     * @param array{
     *     FindingsSummary?: OrganizationFindingsSummary|null,
     *     AccountBreakdown?: list<AccountSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
