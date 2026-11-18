<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActions;

trait ListRemoteSourceActionsTrait
{
    /**
     * @param ListRemoteSourceActionsRequest $args
     * @return ListRemoteSourceActionsResponse
     */
    public function listRemoteSourceActions(ListRemoteSourceActionsRequest $args)
    {
        $result = parent::listRemoteSourceActions($args->toArray());
        return new ListRemoteSourceActionsResponse($result->toArray());
    }
}
