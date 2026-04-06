<?php

namespace Sunaoka\Aws\Structures\Transfer\StartRemoteDelete;

trait StartRemoteDeleteTrait
{
    /**
     * @param StartRemoteDeleteRequest $args
     * @return StartRemoteDeleteResponse
     */
    public function startRemoteDelete(StartRemoteDeleteRequest $args)
    {
        $result = parent::startRemoteDelete($args->toArray());
        return new StartRemoteDeleteResponse($result->toArray());
    }
}
