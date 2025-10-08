<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UnsubscribeFromDataset;

trait UnsubscribeFromDatasetTrait
{
    /**
     * @param UnsubscribeFromDatasetRequest $args
     * @return UnsubscribeFromDatasetResponse
     */
    public function unsubscribeFromDataset(UnsubscribeFromDatasetRequest $args)
    {
        $result = parent::unsubscribeFromDataset($args->toArray());
        return new UnsubscribeFromDatasetResponse($result->toArray());
    }
}
