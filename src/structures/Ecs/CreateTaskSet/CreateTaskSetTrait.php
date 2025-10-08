<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateTaskSet;

trait CreateTaskSetTrait
{
    /**
     * @param CreateTaskSetRequest $args
     * @return CreateTaskSetResponse
     */
    public function createTaskSet(CreateTaskSetRequest $args)
    {
        $result = parent::createTaskSet($args->toArray());
        return new CreateTaskSetResponse($result->toArray());
    }
}
