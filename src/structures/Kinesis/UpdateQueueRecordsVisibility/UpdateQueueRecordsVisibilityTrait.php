<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueueRecordsVisibility;

trait UpdateQueueRecordsVisibilityTrait
{
    /**
     * @param UpdateQueueRecordsVisibilityRequest $args
     * @return UpdateQueueRecordsVisibilityResponse
     */
    public function updateQueueRecordsVisibility(UpdateQueueRecordsVisibilityRequest $args)
    {
        $result = parent::updateQueueRecordsVisibility($args->toArray());
        return new UpdateQueueRecordsVisibilityResponse($result->toArray());
    }
}
