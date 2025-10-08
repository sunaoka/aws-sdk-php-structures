<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateResourceDataSync;

trait UpdateResourceDataSyncTrait
{
    /**
     * @param UpdateResourceDataSyncRequest $args
     * @return UpdateResourceDataSyncResponse
     */
    public function updateResourceDataSync(UpdateResourceDataSyncRequest $args)
    {
        $result = parent::updateResourceDataSync($args->toArray());
        return new UpdateResourceDataSyncResponse($result->toArray());
    }
}
