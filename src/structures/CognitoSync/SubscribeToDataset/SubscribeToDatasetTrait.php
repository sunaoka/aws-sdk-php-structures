<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SubscribeToDataset;

trait SubscribeToDatasetTrait
{
    /**
     * @param SubscribeToDatasetRequest $args
     * @return SubscribeToDatasetResponse
     */
    public function subscribeToDataset(SubscribeToDatasetRequest $args)
    {
        $result = parent::subscribeToDataset($args->toArray());
        return new SubscribeToDatasetResponse($result->toArray());
    }
}
