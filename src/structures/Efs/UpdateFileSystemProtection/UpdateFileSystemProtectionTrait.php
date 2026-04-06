<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystemProtection;

trait UpdateFileSystemProtectionTrait
{
    /**
     * @param UpdateFileSystemProtectionRequest $args
     * @return UpdateFileSystemProtectionResponse
     */
    public function updateFileSystemProtection(UpdateFileSystemProtectionRequest $args)
    {
        $result = parent::updateFileSystemProtection($args->toArray());
        return new UpdateFileSystemProtectionResponse($result->toArray());
    }
}
