<?php

namespace Sunaoka\Aws\Structures\Appstream\ExpireSession;

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
