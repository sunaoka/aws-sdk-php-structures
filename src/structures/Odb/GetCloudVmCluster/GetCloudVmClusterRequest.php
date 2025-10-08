<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudVmClusterId
 */
class GetCloudVmClusterRequest extends Request
{
    /**
     * @param array{cloudVmClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
