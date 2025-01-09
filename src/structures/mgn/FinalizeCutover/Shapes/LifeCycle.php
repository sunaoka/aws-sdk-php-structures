<?php

namespace Sunaoka\Aws\Structures\mgn\FinalizeCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addedToServiceDateTime
 * @property string $elapsedReplicationDuration
 * @property string $firstByteDateTime
 * @property LifeCycleLastCutover $lastCutover
 * @property string $lastSeenByServiceDateTime
 * @property LifeCycleLastTest $lastTest
 * @property 'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION' $state
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     addedToServiceDateTime?: string,
     *     elapsedReplicationDuration?: string,
     *     firstByteDateTime?: string,
     *     lastCutover?: LifeCycleLastCutover,
     *     lastSeenByServiceDateTime?: string,
     *     lastTest?: LifeCycleLastTest,
     *     state?: 'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
