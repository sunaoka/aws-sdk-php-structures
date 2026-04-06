<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteScheduledAction;

trait DeleteScheduledActionTrait
{
    /**
     * @param DeleteScheduledActionRequest $args
     * @return DeleteScheduledActionResponse
     */
    public function deleteScheduledAction(DeleteScheduledActionRequest $args)
    {
        $result = parent::deleteScheduledAction($args->toArray());
        return new DeleteScheduledActionResponse($result->toArray());
    }
}
