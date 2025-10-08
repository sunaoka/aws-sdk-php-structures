<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync;

trait ListResourceDataSyncTrait
{
    /**
     * @param ListResourceDataSyncRequest $args
     * @return ListResourceDataSyncResponse
     */
    public function listResourceDataSync(ListResourceDataSyncRequest $args)
    {
        $result = parent::listResourceDataSync($args->toArray());
        return new ListResourceDataSyncResponse($result->toArray());
    }
}
