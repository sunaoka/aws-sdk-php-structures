<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssociateFileSystem;

trait AssociateFileSystemTrait
{
    /**
     * @param AssociateFileSystemRequest $args
     * @return AssociateFileSystemResponse
     */
    public function associateFileSystem(AssociateFileSystemRequest $args)
    {
        $result = parent::associateFileSystem($args->toArray());
        return new AssociateFileSystemResponse($result->toArray());
    }
}
