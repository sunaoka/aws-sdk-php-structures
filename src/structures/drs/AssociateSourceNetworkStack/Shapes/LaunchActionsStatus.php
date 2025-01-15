<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LaunchActionRun>|null $runs
 * @property string|null $ssmAgentDiscoveryDatetime
 */
class LaunchActionsStatus extends Shape
{
    /**
     * @param array{
     *     runs?: list<LaunchActionRun>|null,
     *     ssmAgentDiscoveryDatetime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
