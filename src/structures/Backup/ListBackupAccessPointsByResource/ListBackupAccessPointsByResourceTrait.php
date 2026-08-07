<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupAccessPointsByResource;

trait ListBackupAccessPointsByResourceTrait
{
    /**
     * @param ListBackupAccessPointsByResourceRequest $args
     * @return ListBackupAccessPointsByResourceResponse
     */
    public function listBackupAccessPointsByResource(ListBackupAccessPointsByResourceRequest $args)
    {
        $result = parent::listBackupAccessPointsByResource($args->toArray());
        return new ListBackupAccessPointsByResourceResponse($result->toArray());
    }
}
