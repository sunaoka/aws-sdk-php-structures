<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $NodeId
 * @property string|null $NodeLogicalId
 */
class DescribeClusterNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeId?: string|null,
     *     NodeLogicalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
