<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\GetAction;

trait GetActionTrait
{
    /**
     * @param GetActionRequest $args
     * @return GetActionResponse
     */
    public function getAction(GetActionRequest $args)
    {
        $result = parent::getAction($args->toArray());
        return new GetActionResponse($result->toArray());
    }
}
