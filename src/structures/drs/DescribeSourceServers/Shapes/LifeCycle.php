<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addedToServiceDateTime
 * @property string $elapsedReplicationDuration
 * @property string $firstByteDateTime
 * @property LifeCycleLastLaunch $lastLaunch
 * @property string $lastSeenByServiceDateTime
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     addedToServiceDateTime?: string,
     *     elapsedReplicationDuration?: string,
     *     firstByteDateTime?: string,
     *     lastLaunch?: LifeCycleLastLaunch,
     *     lastSeenByServiceDateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
