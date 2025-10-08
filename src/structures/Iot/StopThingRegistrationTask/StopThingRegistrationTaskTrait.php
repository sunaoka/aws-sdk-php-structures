<?php

namespace Sunaoka\Aws\Structures\Iot\StopThingRegistrationTask;

trait StopThingRegistrationTaskTrait
{
    /**
     * @param StopThingRegistrationTaskRequest $args
     * @return StopThingRegistrationTaskResponse
     */
    public function stopThingRegistrationTask(StopThingRegistrationTaskRequest $args)
    {
        $result = parent::stopThingRegistrationTask($args->toArray());
        return new StopThingRegistrationTaskResponse($result->toArray());
    }
}
