<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ThreatReference|null $Technique
 * @property int|null $FindingCount
 * @property list<string>|null $FindingTypes
 */
class TechniqueCoverage extends Shape
{
    /**
     * @param array{
     *     Technique?: ThreatReference|null,
     *     FindingCount?: int|null,
     *     FindingTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
