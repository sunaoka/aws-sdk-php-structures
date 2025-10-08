<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

trait PutSourceServerActionTrait
{
    /**
     * @param PutSourceServerActionRequest $args
     * @return PutSourceServerActionResponse
     */
    public function putSourceServerAction(PutSourceServerActionRequest $args)
    {
        $result = parent::putSourceServerAction($args->toArray());
        return new PutSourceServerActionResponse($result->toArray());
    }
}
