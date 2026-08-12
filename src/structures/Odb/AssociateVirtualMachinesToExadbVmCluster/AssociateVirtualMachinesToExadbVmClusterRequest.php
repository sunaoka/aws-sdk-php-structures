<?php

namespace Sunaoka\Aws\Structures\Odb\AssociateVirtualMachinesToExadbVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exadbVmClusterId
 * @property int<1, max> $desiredNodeCount
 */
class AssociateVirtualMachinesToExadbVmClusterRequest extends Request
{
    /**
     * @param array{
     *     exadbVmClusterId: string,
     *     desiredNodeCount: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
