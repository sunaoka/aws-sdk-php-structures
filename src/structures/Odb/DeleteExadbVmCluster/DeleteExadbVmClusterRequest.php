<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteExadbVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exadbVmClusterId
 */
class DeleteExadbVmClusterRequest extends Request
{
    /**
     * @param array{exadbVmClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
