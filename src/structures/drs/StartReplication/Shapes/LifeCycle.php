<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addedToServiceDateTime
 * @property string|null $elapsedReplicationDuration
 * @property string|null $firstByteDateTime
 * @property LifeCycleLastLaunch|null $lastLaunch
 * @property string|null $lastSeenByServiceDateTime
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     addedToServiceDateTime?: string|null,
     *     elapsedReplicationDuration?: string|null,
     *     firstByteDateTime?: string|null,
     *     lastLaunch?: LifeCycleLastLaunch|null,
     *     lastSeenByServiceDateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
