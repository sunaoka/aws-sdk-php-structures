<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DescribeClusterRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
