<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateSyncBlocker;

trait UpdateSyncBlockerTrait
{
    /**
     * @param UpdateSyncBlockerRequest $args
     * @return UpdateSyncBlockerResponse
     */
    public function updateSyncBlocker(UpdateSyncBlockerRequest $args)
    {
        $result = parent::updateSyncBlocker($args->toArray());
        return new UpdateSyncBlockerResponse($result->toArray());
    }
}
