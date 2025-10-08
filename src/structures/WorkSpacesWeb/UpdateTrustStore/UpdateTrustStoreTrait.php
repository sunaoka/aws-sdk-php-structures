<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateTrustStore;

trait UpdateTrustStoreTrait
{
    /**
     * @param UpdateTrustStoreRequest $args
     * @return UpdateTrustStoreResponse
     */
    public function updateTrustStore(UpdateTrustStoreRequest $args)
    {
        $result = parent::updateTrustStore($args->toArray());
        return new UpdateTrustStoreResponse($result->toArray());
    }
}
