<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addedToServiceDateTime
 * @property string|null $firstByteDateTime
 * @property string|null $elapsedReplicationDuration
 * @property string|null $lastSeenByServiceDateTime
 * @property LifeCycleLastLaunch|null $lastLaunch
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     addedToServiceDateTime?: string|null,
     *     firstByteDateTime?: string|null,
     *     elapsedReplicationDuration?: string|null,
     *     lastSeenByServiceDateTime?: string|null,
     *     lastLaunch?: LifeCycleLastLaunch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
