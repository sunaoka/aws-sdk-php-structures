<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterOperationArn
 */
class DescribeClusterOperationRequest extends Request
{
    /**
     * @param array{ClusterOperationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
