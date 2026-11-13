<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Reconnaissance'|'Resource Development'|'Initial Access'|'Execution'|'Persistence'|'Privilege Escalation'|'Defense Evasion'|'Credential Access'|'Discovery'|'Lateral Movement'|'Collection'|'Command and Control'|'Exfiltration'|'Impact'|null $Phase
 * @property string|null $Description
 * @property list<Attack>|null $Attacks
 */
class AttackPhase extends Shape
{
    /**
     * @param array{
     *     Phase?: 'Reconnaissance'|'Resource Development'|'Initial Access'|'Execution'|'Persistence'|'Privilege Escalation'|'Defense Evasion'|'Credential Access'|'Discovery'|'Lateral Movement'|'Collection'|'Command and Control'|'Exfiltration'|'Impact'|null,
     *     Description?: string|null,
     *     Attacks?: list<Attack>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
