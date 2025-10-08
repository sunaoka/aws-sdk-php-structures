<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateScheduledAction;

trait CreateScheduledActionTrait
{
    /**
     * @param CreateScheduledActionRequest $args
     * @return CreateScheduledActionResponse
     */
    public function createScheduledAction(CreateScheduledActionRequest $args)
    {
        $result = parent::createScheduledAction($args->toArray());
        return new CreateScheduledActionResponse($result->toArray());
    }
}
