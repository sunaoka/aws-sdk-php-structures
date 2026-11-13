<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TotalFindings
 * @property list<FindingTypeClassification>|null $BaselineFindings
 * @property list<FindingTypeClassification>|null $AnomalousFindings
 */
class Baseline extends Shape
{
    /**
     * @param array{
     *     TotalFindings?: int<0, max>|null,
     *     BaselineFindings?: list<FindingTypeClassification>|null,
     *     AnomalousFindings?: list<FindingTypeClassification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
