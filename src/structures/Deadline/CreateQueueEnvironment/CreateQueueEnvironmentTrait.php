<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueEnvironment;

trait CreateQueueEnvironmentTrait
{
    /**
     * @param CreateQueueEnvironmentRequest $args
     * @return CreateQueueEnvironmentResponse
     */
    public function createQueueEnvironment(CreateQueueEnvironmentRequest $args)
    {
        $result = parent::createQueueEnvironment($args->toArray());
        return new CreateQueueEnvironmentResponse($result->toArray());
    }
}
