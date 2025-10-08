<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteAssetFilter;

trait DeleteAssetFilterTrait
{
    /**
     * @param DeleteAssetFilterRequest $args
     * @return void
     */
    public function deleteAssetFilter(DeleteAssetFilterRequest $args)
    {
        parent::deleteAssetFilter($args->toArray());
    }
}
