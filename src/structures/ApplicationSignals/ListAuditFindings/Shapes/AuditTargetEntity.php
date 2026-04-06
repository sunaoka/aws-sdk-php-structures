<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceEntity|null $Service
 * @property ServiceLevelObjectiveEntity|null $Slo
 * @property ServiceOperationEntity|null $ServiceOperation
 * @property CanaryEntity|null $Canary
 */
class AuditTargetEntity extends Shape
{
    /**
     * @param array{
     *     Service?: ServiceEntity|null,
     *     Slo?: ServiceLevelObjectiveEntity|null,
     *     ServiceOperation?: ServiceOperationEntity|null,
     *     Canary?: CanaryEntity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
