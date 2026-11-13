<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingsSummary|null $FindingsSummary
 * @property list<TacticCoverage>|null $TacticCoverage
 * @property list<AccountAffectedResource>|null $AffectedResources
 */
class AccountAnalysis extends Shape
{
    /**
     * @param array{
     *     FindingsSummary?: FindingsSummary|null,
     *     TacticCoverage?: list<TacticCoverage>|null,
     *     AffectedResources?: list<AccountAffectedResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
