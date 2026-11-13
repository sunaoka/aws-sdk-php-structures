<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CorrelatedFinding>|null $Correlated
 * @property list<ObservedFindingType>|null $Observed
 */
class RelatedFindings extends Shape
{
    /**
     * @param array{
     *     Correlated?: list<CorrelatedFinding>|null,
     *     Observed?: list<ObservedFindingType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
