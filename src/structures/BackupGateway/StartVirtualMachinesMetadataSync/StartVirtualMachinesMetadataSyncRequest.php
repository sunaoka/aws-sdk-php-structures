<?php

namespace Sunaoka\Aws\Structures\BackupGateway\StartVirtualMachinesMetadataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 */
class StartVirtualMachinesMetadataSyncRequest extends Request
{
    /**
     * @param array{HypervisorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
