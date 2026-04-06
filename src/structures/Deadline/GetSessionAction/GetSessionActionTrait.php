<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction;

trait GetSessionActionTrait
{
    /**
     * @param GetSessionActionRequest $args
     * @return GetSessionActionResponse
     */
    public function getSessionAction(GetSessionActionRequest $args)
    {
        $result = parent::getSessionAction($args->toArray());
        return new GetSessionActionResponse($result->toArray());
    }
}
