<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $OperationId
 */
class DescribeClusterOperationRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     OperationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
