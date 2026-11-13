<?php

namespace Sunaoka\Aws\Structures\Odb\AssociateVirtualMachinesToCloudVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudVmClusterId
 * @property list<string> $dbServers
 */
class AssociateVirtualMachinesToCloudVmClusterRequest extends Request
{
    /**
     * @param array{
     *     cloudVmClusterId: string,
     *     dbServers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
