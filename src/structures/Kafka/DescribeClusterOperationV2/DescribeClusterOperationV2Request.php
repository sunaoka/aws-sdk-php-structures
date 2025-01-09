<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterOperationArn
 */
class DescribeClusterOperationV2Request extends Request
{
    /**
     * @param array{ClusterOperationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
