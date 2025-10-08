<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter;

trait GetAssetFilterTrait
{
    /**
     * @param GetAssetFilterRequest $args
     * @return GetAssetFilterResponse
     */
    public function getAssetFilter(GetAssetFilterRequest $args)
    {
        $result = parent::getAssetFilter($args->toArray());
        return new GetAssetFilterResponse($result->toArray());
    }
}
