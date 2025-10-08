<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudAutonomousVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudAutonomousVmClusterId
 */
class GetCloudAutonomousVmClusterRequest extends Request
{
    /**
     * @param array{cloudAutonomousVmClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
