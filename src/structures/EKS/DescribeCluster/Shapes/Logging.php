<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogSetup>|null $clusterLogging
 */
class Logging extends Shape
{
    /**
     * @param array{clusterLogging?: list<LogSetup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
