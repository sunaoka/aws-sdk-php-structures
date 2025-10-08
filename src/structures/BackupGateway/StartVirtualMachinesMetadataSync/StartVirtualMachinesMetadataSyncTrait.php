<?php

namespace Sunaoka\Aws\Structures\BackupGateway\StartVirtualMachinesMetadataSync;

trait StartVirtualMachinesMetadataSyncTrait
{
    /**
     * @param StartVirtualMachinesMetadataSyncRequest $args
     * @return StartVirtualMachinesMetadataSyncResponse
     */
    public function startVirtualMachinesMetadataSync(StartVirtualMachinesMetadataSyncRequest $args)
    {
        $result = parent::startVirtualMachinesMetadataSync($args->toArray());
        return new StartVirtualMachinesMetadataSyncResponse($result->toArray());
    }
}
