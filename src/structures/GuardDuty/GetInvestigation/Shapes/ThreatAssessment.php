<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttackPhase>|null $AttackProgression
 * @property string|null $ThreatActorProfile
 */
class ThreatAssessment extends Shape
{
    /**
     * @param array{
     *     AttackProgression?: list<AttackPhase>|null,
     *     ThreatActorProfile?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
