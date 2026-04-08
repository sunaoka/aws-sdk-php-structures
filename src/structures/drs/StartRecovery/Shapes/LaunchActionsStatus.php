<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ssmAgentDiscoveryDatetime
 * @property list<LaunchActionRun>|null $runs
 */
class LaunchActionsStatus extends Shape
{
    /**
     * @param array{
     *     ssmAgentDiscoveryDatetime?: string|null,
     *     runs?: list<LaunchActionRun>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
