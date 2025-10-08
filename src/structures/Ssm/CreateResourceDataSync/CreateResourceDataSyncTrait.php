<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync;

trait CreateResourceDataSyncTrait
{
    /**
     * @param CreateResourceDataSyncRequest $args
     * @return CreateResourceDataSyncResponse
     */
    public function createResourceDataSync(CreateResourceDataSyncRequest $args)
    {
        $result = parent::createResourceDataSync($args->toArray());
        return new CreateResourceDataSyncResponse($result->toArray());
    }
}
