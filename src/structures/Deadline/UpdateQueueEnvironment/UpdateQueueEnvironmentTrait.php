<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueEnvironment;

trait UpdateQueueEnvironmentTrait
{
    /**
     * @param UpdateQueueEnvironmentRequest $args
     * @return UpdateQueueEnvironmentResponse
     */
    public function updateQueueEnvironment(UpdateQueueEnvironmentRequest $args)
    {
        $result = parent::updateQueueEnvironment($args->toArray());
        return new UpdateQueueEnvironmentResponse($result->toArray());
    }
}
