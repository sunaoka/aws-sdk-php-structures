<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceSyncBlocker;

trait UpdateServiceSyncBlockerTrait
{
    /**
     * @param UpdateServiceSyncBlockerRequest $args
     * @return UpdateServiceSyncBlockerResponse
     */
    public function updateServiceSyncBlocker(UpdateServiceSyncBlockerRequest $args)
    {
        $result = parent::updateServiceSyncBlocker($args->toArray());
        return new UpdateServiceSyncBlockerResponse($result->toArray());
    }
}
