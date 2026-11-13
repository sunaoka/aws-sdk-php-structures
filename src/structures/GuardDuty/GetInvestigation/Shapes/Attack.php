<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ThreatReference|null $Tactic
 * @property ThreatReference|null $Technique
 * @property list<FindingReference>|null $Findings
 * @property string|null $Version
 */
class Attack extends Shape
{
    /**
     * @param array{
     *     Tactic?: ThreatReference|null,
     *     Technique?: ThreatReference|null,
     *     Findings?: list<FindingReference>|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
