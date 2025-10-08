<?php

namespace Sunaoka\Aws\Structures\MigrationHub\NotifyApplicationState;

trait NotifyApplicationStateTrait
{
    /**
     * @param NotifyApplicationStateRequest $args
     * @return NotifyApplicationStateResponse
     */
    public function notifyApplicationState(NotifyApplicationStateRequest $args)
    {
        $result = parent::notifyApplicationState($args->toArray());
        return new NotifyApplicationStateResponse($result->toArray());
    }
}
