<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch;

trait PublishBatchTrait
{
    /**
     * @param PublishBatchRequest $args
     * @return PublishBatchResponse
     */
    public function publishBatch(PublishBatchRequest $args)
    {
        $result = parent::publishBatch($args->toArray());
        return new PublishBatchResponse($result->toArray());
    }
}
