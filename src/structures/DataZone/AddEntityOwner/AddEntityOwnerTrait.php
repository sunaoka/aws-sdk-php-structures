<?php

namespace Sunaoka\Aws\Structures\DataZone\AddEntityOwner;

trait AddEntityOwnerTrait
{
    /**
     * @param AddEntityOwnerRequest $args
     * @return AddEntityOwnerResponse
     */
    public function addEntityOwner(AddEntityOwnerRequest $args)
    {
        $result = parent::addEntityOwner($args->toArray());
        return new AddEntityOwnerResponse($result->toArray());
    }
}
