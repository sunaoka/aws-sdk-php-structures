<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodeMonitoringCondition
 * @property string|null $nodeUnhealthyReason
 * @property int<1, max>|null $minRepairWaitTimeMins
 * @property 'Replace'|'Reboot'|'NoAction'|null $repairAction
 */
class NodeRepairConfigOverrides extends Shape
{
    /**
     * @param array{
     *     nodeMonitoringCondition?: string|null,
     *     nodeUnhealthyReason?: string|null,
     *     minRepairWaitTimeMins?: int<1, max>|null,
     *     repairAction?: 'Replace'|'Reboot'|'NoAction'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
