<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteRemoteSourceAction;

trait DeleteRemoteSourceActionTrait
{
    /**
     * @param DeleteRemoteSourceActionRequest $args
     * @return DeleteRemoteSourceActionResponse
     */
    public function deleteRemoteSourceAction(DeleteRemoteSourceActionRequest $args)
    {
        $result = parent::deleteRemoteSourceAction($args->toArray());
        return new DeleteRemoteSourceActionResponse($result->toArray());
    }
}
