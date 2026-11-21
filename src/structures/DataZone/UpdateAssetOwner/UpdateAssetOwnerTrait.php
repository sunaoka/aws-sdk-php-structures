<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetOwner;

trait UpdateAssetOwnerTrait
{
    /**
     * @param UpdateAssetOwnerRequest $args
     * @return UpdateAssetOwnerResponse
     */
    public function updateAssetOwner(UpdateAssetOwnerRequest $args)
    {
        $result = parent::updateAssetOwner($args->toArray());
        return new UpdateAssetOwnerResponse($result->toArray());
    }
}
