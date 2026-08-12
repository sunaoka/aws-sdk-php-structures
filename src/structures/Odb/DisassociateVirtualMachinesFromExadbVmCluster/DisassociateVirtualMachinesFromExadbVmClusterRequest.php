<?php

namespace Sunaoka\Aws\Structures\Odb\DisassociateVirtualMachinesFromExadbVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exadbVmClusterId
 * @property list<string> $dbNodeIds
 */
class DisassociateVirtualMachinesFromExadbVmClusterRequest extends Request
{
    /**
     * @param array{
     *     exadbVmClusterId: string,
     *     dbNodeIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
