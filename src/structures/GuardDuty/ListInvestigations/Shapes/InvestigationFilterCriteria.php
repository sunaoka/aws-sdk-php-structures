<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'STATUS'|'RISK_LEVEL'|'CONFIDENCE'|'FINDING_ID'|'INVESTIGATION_TYPE', InvestigationFilterCondition>|null $Criterion
 */
class InvestigationFilterCriteria extends Shape
{
    /**
     * @param array{Criterion?: array<'STATUS'|'RISK_LEVEL'|'CONFIDENCE'|'FINDING_ID'|'INVESTIGATION_TYPE', InvestigationFilterCondition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
