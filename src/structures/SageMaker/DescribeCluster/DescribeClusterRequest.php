<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 */
class DescribeClusterRequest extends Request
{
    /**
     * @param array{ClusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
