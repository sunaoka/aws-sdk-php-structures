<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled' $lastDeploymentStatus
 * @property string $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult $lastDeploymentTime
 */
class Fleet extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastDeploymentStatus?: 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled',
     *     lastDeploymentJob?: string,
     *     lastDeploymentTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
