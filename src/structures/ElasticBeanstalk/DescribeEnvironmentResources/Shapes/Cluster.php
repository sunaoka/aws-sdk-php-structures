<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 */
class Cluster extends Shape
{
    /**
     * @param array{ClusterArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
