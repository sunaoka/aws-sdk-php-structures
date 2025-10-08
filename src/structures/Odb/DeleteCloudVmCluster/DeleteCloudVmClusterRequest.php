<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteCloudVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudVmClusterId
 */
class DeleteCloudVmClusterRequest extends Request
{
    /**
     * @param array{cloudVmClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
