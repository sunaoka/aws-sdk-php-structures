<?php

namespace Sunaoka\Aws\Structures\Odb\GetExadbVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exadbVmClusterId
 */
class GetExadbVmClusterRequest extends Request
{
    /**
     * @param array{exadbVmClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
