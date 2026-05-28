<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchPutProfileObject;

trait BatchPutProfileObjectTrait
{
    /**
     * @param BatchPutProfileObjectRequest $args
     * @return BatchPutProfileObjectResponse
     */
    public function batchPutProfileObject(BatchPutProfileObjectRequest $args)
    {
        $result = parent::batchPutProfileObject($args->toArray());
        return new BatchPutProfileObjectResponse($result->toArray());
    }
}
