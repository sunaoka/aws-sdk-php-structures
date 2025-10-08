<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendApiAsset;

trait SendApiAssetTrait
{
    /**
     * @param SendApiAssetRequest $args
     * @return SendApiAssetResponse
     */
    public function sendApiAsset(SendApiAssetRequest $args)
    {
        $result = parent::sendApiAsset($args->toArray());
        return new SendApiAssetResponse($result->toArray());
    }
}
