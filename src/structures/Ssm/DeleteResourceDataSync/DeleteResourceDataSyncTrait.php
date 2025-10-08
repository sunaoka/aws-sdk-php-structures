<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteResourceDataSync;

trait DeleteResourceDataSyncTrait
{
    /**
     * @param DeleteResourceDataSyncRequest $args
     * @return DeleteResourceDataSyncResponse
     */
    public function deleteResourceDataSync(DeleteResourceDataSyncRequest $args)
    {
        $result = parent::deleteResourceDataSync($args->toArray());
        return new DeleteResourceDataSyncResponse($result->toArray());
    }
}
