<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteQueueEnvironment;

trait DeleteQueueEnvironmentTrait
{
    /**
     * @param DeleteQueueEnvironmentRequest $args
     * @return DeleteQueueEnvironmentResponse
     */
    public function deleteQueueEnvironment(DeleteQueueEnvironmentRequest $args)
    {
        $result = parent::deleteQueueEnvironment($args->toArray());
        return new DeleteQueueEnvironmentResponse($result->toArray());
    }
}
