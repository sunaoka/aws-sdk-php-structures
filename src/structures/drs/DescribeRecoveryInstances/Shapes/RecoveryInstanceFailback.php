<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentLastSeenByServiceDateTime
 * @property string $elapsedReplicationDuration
 * @property string $failbackClientID
 * @property string $failbackClientLastSeenByServiceDateTime
 * @property string $failbackInitiationTime
 * @property string $failbackJobID
 * @property 'RECOVERY'|'DRILL' $failbackLaunchType
 * @property bool $failbackToOriginalServer
 * @property string $firstByteDateTime
 * @property 'FAILBACK_NOT_STARTED'|'FAILBACK_IN_PROGRESS'|'FAILBACK_READY_FOR_LAUNCH'|'FAILBACK_COMPLETED'|'FAILBACK_ERROR'|'FAILBACK_NOT_READY_FOR_LAUNCH'|'FAILBACK_LAUNCH_STATE_NOT_AVAILABLE' $state
 */
class RecoveryInstanceFailback extends Shape
{
    /**
     * @param array{
     *     agentLastSeenByServiceDateTime?: string,
     *     elapsedReplicationDuration?: string,
     *     failbackClientID?: string,
     *     failbackClientLastSeenByServiceDateTime?: string,
     *     failbackInitiationTime?: string,
     *     failbackJobID?: string,
     *     failbackLaunchType?: 'RECOVERY'|'DRILL',
     *     failbackToOriginalServer?: bool,
     *     firstByteDateTime?: string,
     *     state?: 'FAILBACK_NOT_STARTED'|'FAILBACK_IN_PROGRESS'|'FAILBACK_READY_FOR_LAUNCH'|'FAILBACK_COMPLETED'|'FAILBACK_ERROR'|'FAILBACK_NOT_READY_FOR_LAUNCH'|'FAILBACK_LAUNCH_STATE_NOT_AVAILABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
