<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $rollbackTargetDaemonRevisionArn
 * @property list<string>|null $rollbackCapacityProviders
 */
class DaemonRollback extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     rollbackTargetDaemonRevisionArn?: string|null,
     *     rollbackCapacityProviders?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
