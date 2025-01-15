<?php

namespace Sunaoka\Aws\Structures\mgn\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addedToServiceDateTime
 * @property string|null $elapsedReplicationDuration
 * @property string|null $firstByteDateTime
 * @property LifeCycleLastCutover|null $lastCutover
 * @property string|null $lastSeenByServiceDateTime
 * @property LifeCycleLastTest|null $lastTest
 * @property 'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'|null $state
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     addedToServiceDateTime?: string|null,
     *     elapsedReplicationDuration?: string|null,
     *     firstByteDateTime?: string|null,
     *     lastCutover?: LifeCycleLastCutover|null,
     *     lastSeenByServiceDateTime?: string|null,
     *     lastTest?: LifeCycleLastTest|null,
     *     state?: 'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
