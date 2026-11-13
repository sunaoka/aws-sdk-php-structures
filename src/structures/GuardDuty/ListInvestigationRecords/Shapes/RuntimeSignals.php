<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SignalGroup>|null $SignalGroups
 * @property string|null $KeyObservation
 */
class RuntimeSignals extends Shape
{
    /**
     * @param array{
     *     SignalGroups?: list<SignalGroup>|null,
     *     KeyObservation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
