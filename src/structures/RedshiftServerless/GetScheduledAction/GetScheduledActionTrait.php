<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetScheduledAction;

trait GetScheduledActionTrait
{
    /**
     * @param GetScheduledActionRequest $args
     * @return GetScheduledActionResponse
     */
    public function getScheduledAction(GetScheduledActionRequest $args)
    {
        $result = parent::getScheduledAction($args->toArray());
        return new GetScheduledActionResponse($result->toArray());
    }
}
