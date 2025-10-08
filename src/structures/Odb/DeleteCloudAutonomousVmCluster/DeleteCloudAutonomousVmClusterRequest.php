<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteCloudAutonomousVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudAutonomousVmClusterId
 */
class DeleteCloudAutonomousVmClusterRequest extends Request
{
    /**
     * @param array{cloudAutonomousVmClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
