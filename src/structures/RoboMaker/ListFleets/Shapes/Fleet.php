<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled'|null $lastDeploymentStatus
 * @property string|null $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult|null $lastDeploymentTime
 */
class Fleet extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastDeploymentStatus?: 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled'|null,
     *     lastDeploymentJob?: string|null,
     *     lastDeploymentTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
