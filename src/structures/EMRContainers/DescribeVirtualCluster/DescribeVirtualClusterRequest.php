<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DescribeVirtualClusterRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
