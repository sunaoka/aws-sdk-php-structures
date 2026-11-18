<?php

namespace Sunaoka\Aws\Structures\mgn\CreateRemoteSourceAction;

trait CreateRemoteSourceActionTrait
{
    /**
     * @param CreateRemoteSourceActionRequest $args
     * @return CreateRemoteSourceActionResponse
     */
    public function createRemoteSourceAction(CreateRemoteSourceActionRequest $args)
    {
        $result = parent::createRemoteSourceAction($args->toArray());
        return new CreateRemoteSourceActionResponse($result->toArray());
    }
}
