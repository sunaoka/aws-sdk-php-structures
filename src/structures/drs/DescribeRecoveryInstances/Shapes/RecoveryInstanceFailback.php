<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentLastSeenByServiceDateTime
 * @property string|null $elapsedReplicationDuration
 * @property string|null $failbackClientID
 * @property string|null $failbackClientLastSeenByServiceDateTime
 * @property string|null $failbackInitiationTime
 * @property string|null $failbackJobID
 * @property 'RECOVERY'|'DRILL'|null $failbackLaunchType
 * @property bool|null $failbackToOriginalServer
 * @property string|null $firstByteDateTime
 * @property 'FAILBACK_NOT_STARTED'|'FAILBACK_IN_PROGRESS'|'FAILBACK_READY_FOR_LAUNCH'|'FAILBACK_COMPLETED'|'FAILBACK_ERROR'|'FAILBACK_NOT_READY_FOR_LAUNCH'|'FAILBACK_LAUNCH_STATE_NOT_AVAILABLE'|null $state
 */
class RecoveryInstanceFailback extends Shape
{
    /**
     * @param array{
     *     agentLastSeenByServiceDateTime?: string|null,
     *     elapsedReplicationDuration?: string|null,
     *     failbackClientID?: string|null,
     *     failbackClientLastSeenByServiceDateTime?: string|null,
     *     failbackInitiationTime?: string|null,
     *     failbackJobID?: string|null,
     *     failbackLaunchType?: 'RECOVERY'|'DRILL'|null,
     *     failbackToOriginalServer?: bool|null,
     *     firstByteDateTime?: string|null,
     *     state?: 'FAILBACK_NOT_STARTED'|'FAILBACK_IN_PROGRESS'|'FAILBACK_READY_FOR_LAUNCH'|'FAILBACK_COMPLETED'|'FAILBACK_ERROR'|'FAILBACK_NOT_READY_FOR_LAUNCH'|'FAILBACK_LAUNCH_STATE_NOT_AVAILABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
