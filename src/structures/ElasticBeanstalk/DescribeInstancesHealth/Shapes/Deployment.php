<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VersionLabel
 * @property int|null $DeploymentId
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $DeploymentTime
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     VersionLabel?: string|null,
     *     DeploymentId?: int|null,
     *     Status?: string|null,
     *     DeploymentTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
