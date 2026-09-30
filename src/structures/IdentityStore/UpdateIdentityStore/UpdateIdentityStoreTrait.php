<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateIdentityStore;

trait UpdateIdentityStoreTrait
{
    /**
     * @param UpdateIdentityStoreRequest $args
     * @return UpdateIdentityStoreResponse
     */
    public function updateIdentityStore(UpdateIdentityStoreRequest $args)
    {
        $result = parent::updateIdentityStore($args->toArray());
        return new UpdateIdentityStoreResponse($result->toArray());
    }
}
