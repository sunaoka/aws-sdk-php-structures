<?php

namespace Sunaoka\Aws\Structures\drs\StartRecoveryPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceServerID
 * @property string $recoverySnapshotID
 */
class RecoveryPlanExecutionSourceServer extends Shape
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     recoverySnapshotID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
