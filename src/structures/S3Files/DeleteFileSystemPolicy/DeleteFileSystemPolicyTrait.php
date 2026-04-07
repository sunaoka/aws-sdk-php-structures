<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteFileSystemPolicy;

trait DeleteFileSystemPolicyTrait
{
    /**
     * @param DeleteFileSystemPolicyRequest $args
     * @return void
     */
    public function deleteFileSystemPolicy(DeleteFileSystemPolicyRequest $args)
    {
        parent::deleteFileSystemPolicy($args->toArray());
    }
}
