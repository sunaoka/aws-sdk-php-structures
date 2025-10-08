<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskSet;

trait UpdateTaskSetTrait
{
    /**
     * @param UpdateTaskSetRequest $args
     * @return UpdateTaskSetResponse
     */
    public function updateTaskSet(UpdateTaskSetRequest $args)
    {
        $result = parent::updateTaskSet($args->toArray());
        return new UpdateTaskSetResponse($result->toArray());
    }
}
