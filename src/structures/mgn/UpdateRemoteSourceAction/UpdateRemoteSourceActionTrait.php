<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateRemoteSourceAction;

trait UpdateRemoteSourceActionTrait
{
    /**
     * @param UpdateRemoteSourceActionRequest $args
     * @return UpdateRemoteSourceActionResponse
     */
    public function updateRemoteSourceAction(UpdateRemoteSourceActionRequest $args)
    {
        $result = parent::updateRemoteSourceAction($args->toArray());
        return new UpdateRemoteSourceActionResponse($result->toArray());
    }
}
