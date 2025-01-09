<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class DescribeClusterRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
