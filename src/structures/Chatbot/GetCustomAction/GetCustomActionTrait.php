<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction;

trait GetCustomActionTrait
{
    /**
     * @param GetCustomActionRequest $args
     * @return GetCustomActionResponse
     */
    public function getCustomAction(GetCustomActionRequest $args)
    {
        $result = parent::getCustomAction($args->toArray());
        return new GetCustomActionResponse($result->toArray());
    }
}
