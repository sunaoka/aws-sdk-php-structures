<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingRegistrationTasks;

trait ListThingRegistrationTasksTrait
{
    /**
     * @param ListThingRegistrationTasksRequest $args
     * @return ListThingRegistrationTasksResponse
     */
    public function listThingRegistrationTasks(ListThingRegistrationTasksRequest $args)
    {
        $result = parent::listThingRegistrationTasks($args->toArray());
        return new ListThingRegistrationTasksResponse($result->toArray());
    }
}
