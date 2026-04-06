<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter;

trait CreateAssetFilterTrait
{
    /**
     * @param CreateAssetFilterRequest $args
     * @return CreateAssetFilterResponse
     */
    public function createAssetFilter(CreateAssetFilterRequest $args)
    {
        $result = parent::createAssetFilter($args->toArray());
        return new CreateAssetFilterResponse($result->toArray());
    }
}
