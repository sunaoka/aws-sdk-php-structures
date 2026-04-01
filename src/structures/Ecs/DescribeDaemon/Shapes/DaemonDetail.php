<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $daemonArn
 * @property string|null $clusterArn
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|null $status
 * @property list<DaemonRevisionDetail>|null $currentRevisions
 * @property string|null $deploymentArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DaemonDetail extends Shape
{
    /**
     * @param array{
     *     daemonArn?: string|null,
     *     clusterArn?: string|null,
     *     status?: 'ACTIVE'|'DELETE_IN_PROGRESS'|null,
     *     currentRevisions?: list<DaemonRevisionDetail>|null,
     *     deploymentArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
