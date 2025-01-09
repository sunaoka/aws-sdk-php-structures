<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{ClusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
