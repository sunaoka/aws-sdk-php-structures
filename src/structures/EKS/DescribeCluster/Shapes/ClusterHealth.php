<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClusterIssue> $issues
 */
class ClusterHealth extends Shape
{
    /**
     * @param array{issues?: list<ClusterIssue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
