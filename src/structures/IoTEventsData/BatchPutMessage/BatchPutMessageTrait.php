<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage;

trait BatchPutMessageTrait
{
    /**
     * @param BatchPutMessageRequest $args
     * @return BatchPutMessageResponse
     */
    public function batchPutMessage(BatchPutMessageRequest $args)
    {
        $result = parent::batchPutMessage($args->toArray());
        return new BatchPutMessageResponse($result->toArray());
    }
}
