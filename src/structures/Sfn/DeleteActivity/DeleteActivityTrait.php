<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteActivity;

trait DeleteActivityTrait
{
    /**
     * @param DeleteActivityRequest $args
     * @return DeleteActivityResponse
     */
    public function deleteActivity(DeleteActivityRequest $args)
    {
        $result = parent::deleteActivity($args->toArray());
        return new DeleteActivityResponse($result->toArray());
    }
}
