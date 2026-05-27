<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterSharedEnvironmentConfigDetails $SharedEnvironmentConfig
 */
class ClusterRestrictedInstanceGroupsConfigOutput extends Shape
{
    /**
     * @param array{SharedEnvironmentConfig: ClusterSharedEnvironmentConfigDetails} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
