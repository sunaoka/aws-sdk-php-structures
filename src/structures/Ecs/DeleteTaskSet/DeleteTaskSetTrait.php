<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskSet;

trait DeleteTaskSetTrait
{
    /**
     * @param DeleteTaskSetRequest $args
     * @return DeleteTaskSetResponse
     */
    public function deleteTaskSet(DeleteTaskSetRequest $args)
    {
        $result = parent::deleteTaskSet($args->toArray());
        return new DeleteTaskSetResponse($result->toArray());
    }
}
