<?php

namespace Sunaoka\Aws\Structures\drs\DeleteLaunchAction;

trait DeleteLaunchActionTrait
{
    /**
     * @param DeleteLaunchActionRequest $args
     * @return DeleteLaunchActionResponse
     */
    public function deleteLaunchAction(DeleteLaunchActionRequest $args)
    {
        $result = parent::deleteLaunchAction($args->toArray());
        return new DeleteLaunchActionResponse($result->toArray());
    }
}
