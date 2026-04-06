<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ExpireSession;

trait ExpireSessionTrait
{
    /**
     * @param ExpireSessionRequest $args
     * @return ExpireSessionResponse
     */
    public function expireSession(ExpireSessionRequest $args)
    {
        $result = parent::expireSession($args->toArray());
        return new ExpireSessionResponse($result->toArray());
    }
}
