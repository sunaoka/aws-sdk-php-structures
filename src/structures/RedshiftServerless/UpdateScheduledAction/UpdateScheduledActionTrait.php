<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateScheduledAction;

trait UpdateScheduledActionTrait
{
    /**
     * @param UpdateScheduledActionRequest $args
     * @return UpdateScheduledActionResponse
     */
    public function updateScheduledAction(UpdateScheduledActionRequest $args)
    {
        $result = parent::updateScheduledAction($args->toArray());
        return new UpdateScheduledActionResponse($result->toArray());
    }
}
