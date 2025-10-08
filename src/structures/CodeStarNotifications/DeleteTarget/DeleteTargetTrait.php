<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DeleteTarget;

trait DeleteTargetTrait
{
    /**
     * @param DeleteTargetRequest $args
     * @return DeleteTargetResponse
     */
    public function deleteTarget(DeleteTargetRequest $args)
    {
        $result = parent::deleteTarget($args->toArray());
        return new DeleteTargetResponse($result->toArray());
    }
}
