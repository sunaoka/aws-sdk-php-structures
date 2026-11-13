<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Reconnaissance'|'Resource Development'|'Initial Access'|'Execution'|'Persistence'|'Privilege Escalation'|'Defense Evasion'|'Credential Access'|'Discovery'|'Lateral Movement'|'Collection'|'Command and Control'|'Exfiltration'|'Impact'|null $Phase
 * @property int|null $FindingCount
 * @property list<string>|null $FindingTypes
 * @property list<TechniqueCoverage>|null $Techniques
 */
class TacticCoverage extends Shape
{
    /**
     * @param array{
     *     Phase?: 'Reconnaissance'|'Resource Development'|'Initial Access'|'Execution'|'Persistence'|'Privilege Escalation'|'Defense Evasion'|'Credential Access'|'Discovery'|'Lateral Movement'|'Collection'|'Command and Control'|'Exfiltration'|'Impact'|null,
     *     FindingCount?: int|null,
     *     FindingTypes?: list<string>|null,
     *     Techniques?: list<TechniqueCoverage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
