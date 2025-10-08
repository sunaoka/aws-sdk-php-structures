<?php

namespace Sunaoka\Aws\Structures\mgn\RemoveSourceServerAction;

trait RemoveSourceServerActionTrait
{
    /**
     * @param RemoveSourceServerActionRequest $args
     * @return RemoveSourceServerActionResponse
     */
    public function removeSourceServerAction(RemoveSourceServerActionRequest $args)
    {
        $result = parent::removeSourceServerAction($args->toArray());
        return new RemoveSourceServerActionResponse($result->toArray());
    }
}
