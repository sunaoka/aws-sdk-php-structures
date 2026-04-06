<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter;

trait UpdateAssetFilterTrait
{
    /**
     * @param UpdateAssetFilterRequest $args
     * @return UpdateAssetFilterResponse
     */
    public function updateAssetFilter(UpdateAssetFilterRequest $args)
    {
        $result = parent::updateAssetFilter($args->toArray());
        return new UpdateAssetFilterResponse($result->toArray());
    }
}
