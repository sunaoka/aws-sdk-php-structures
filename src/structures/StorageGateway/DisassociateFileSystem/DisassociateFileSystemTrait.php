<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DisassociateFileSystem;

trait DisassociateFileSystemTrait
{
    /**
     * @param DisassociateFileSystemRequest $args
     * @return DisassociateFileSystemResponse
     */
    public function disassociateFileSystem(DisassociateFileSystemRequest $args)
    {
        $result = parent::disassociateFileSystem($args->toArray());
        return new DisassociateFileSystemResponse($result->toArray());
    }
}
