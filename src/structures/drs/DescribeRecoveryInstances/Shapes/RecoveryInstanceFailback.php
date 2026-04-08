<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $failbackClientID
 * @property string|null $failbackJobID
 * @property string|null $failbackInitiationTime
 * @property 'FAILBACK_NOT_STARTED'|'FAILBACK_IN_PROGRESS'|'FAILBACK_READY_FOR_LAUNCH'|'FAILBACK_COMPLETED'|'FAILBACK_ERROR'|'FAILBACK_NOT_READY_FOR_LAUNCH'|'FAILBACK_LAUNCH_STATE_NOT_AVAILABLE'|null $state
 * @property string|null $agentLastSeenByServiceDateTime
 * @property string|null $failbackClientLastSeenByServiceDateTime
 * @property bool|null $failbackToOriginalServer
 * @property string|null $firstByteDateTime
 * @property string|null $elapsedReplicationDuration
 * @property 'RECOVERY'|'DRILL'|null $failbackLaunchType
 */
class RecoveryInstanceFailback extends Shape
{
    /**
     * @param array{
     *     failbackClientID?: string|null,
     *     failbackJobID?: string|null,
     *     failbackInitiationTime?: string|null,
     *     state?: 'FAILBACK_NOT_STARTED'|'FAILBACK_IN_PROGRESS'|'FAILBACK_READY_FOR_LAUNCH'|'FAILBACK_COMPLETED'|'FAILBACK_ERROR'|'FAILBACK_NOT_READY_FOR_LAUNCH'|'FAILBACK_LAUNCH_STATE_NOT_AVAILABLE'|null,
     *     agentLastSeenByServiceDateTime?: string|null,
     *     failbackClientLastSeenByServiceDateTime?: string|null,
     *     failbackToOriginalServer?: bool|null,
     *     firstByteDateTime?: string|null,
     *     elapsedReplicationDuration?: string|null,
     *     failbackLaunchType?: 'RECOVERY'|'DRILL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
