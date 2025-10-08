<?php

namespace Sunaoka\Aws\Structures\Iot\StartThingRegistrationTask;

trait StartThingRegistrationTaskTrait
{
    /**
     * @param StartThingRegistrationTaskRequest $args
     * @return StartThingRegistrationTaskResponse
     */
    public function startThingRegistrationTask(StartThingRegistrationTaskRequest $args)
    {
        $result = parent::startThingRegistrationTask($args->toArray());
        return new StartThingRegistrationTaskResponse($result->toArray());
    }
}
