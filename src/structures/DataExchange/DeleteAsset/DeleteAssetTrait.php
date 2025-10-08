<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteAsset;

trait DeleteAssetTrait
{
    /**
     * @param DeleteAssetRequest $args
     * @return void
     */
    public function deleteAsset(DeleteAssetRequest $args)
    {
        parent::deleteAsset($args->toArray());
    }
}
