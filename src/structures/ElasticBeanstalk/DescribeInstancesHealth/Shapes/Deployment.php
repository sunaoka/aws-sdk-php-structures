<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VersionLabel
 * @property int $DeploymentId
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $DeploymentTime
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     VersionLabel?: string,
     *     DeploymentId?: int,
     *     Status?: string,
     *     DeploymentTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
