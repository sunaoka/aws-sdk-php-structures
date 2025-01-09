<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 */
class DescribeClusterV2Request extends Request
{
    /**
     * @param array{ClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
