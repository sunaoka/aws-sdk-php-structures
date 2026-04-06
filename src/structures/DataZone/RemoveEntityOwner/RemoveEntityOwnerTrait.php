<?php

namespace Sunaoka\Aws\Structures\DataZone\RemoveEntityOwner;

trait RemoveEntityOwnerTrait
{
    /**
     * @param RemoveEntityOwnerRequest $args
     * @return RemoveEntityOwnerResponse
     */
    public function removeEntityOwner(RemoveEntityOwnerRequest $args)
    {
        $result = parent::removeEntityOwner($args->toArray());
        return new RemoveEntityOwnerResponse($result->toArray());
    }
}
