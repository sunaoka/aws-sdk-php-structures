<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueEnvironment;

trait GetQueueEnvironmentTrait
{
    /**
     * @param GetQueueEnvironmentRequest $args
     * @return GetQueueEnvironmentResponse
     */
    public function getQueueEnvironment(GetQueueEnvironmentRequest $args)
    {
        $result = parent::getQueueEnvironment($args->toArray());
        return new GetQueueEnvironmentResponse($result->toArray());
    }
}
