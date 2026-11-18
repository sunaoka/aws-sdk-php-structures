<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateDeadLetterQueueRecordsVisibility;

trait UpdateDeadLetterQueueRecordsVisibilityTrait
{
    /**
     * @param UpdateDeadLetterQueueRecordsVisibilityRequest $args
     * @return UpdateDeadLetterQueueRecordsVisibilityResponse
     */
    public function updateDeadLetterQueueRecordsVisibility(UpdateDeadLetterQueueRecordsVisibilityRequest $args)
    {
        $result = parent::updateDeadLetterQueueRecordsVisibility($args->toArray());
        return new UpdateDeadLetterQueueRecordsVisibilityResponse($result->toArray());
    }
}
