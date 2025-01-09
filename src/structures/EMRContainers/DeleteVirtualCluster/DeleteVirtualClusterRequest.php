<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DeleteVirtualCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteVirtualClusterRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
