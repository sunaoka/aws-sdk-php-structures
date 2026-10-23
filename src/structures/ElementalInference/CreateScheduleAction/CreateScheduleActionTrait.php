<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateScheduleAction;

trait CreateScheduleActionTrait
{
    /**
     * @param CreateScheduleActionRequest $args
     * @return CreateScheduleActionResponse
     */
    public function createScheduleAction(CreateScheduleActionRequest $args)
    {
        $result = parent::createScheduleAction($args->toArray());
        return new CreateScheduleActionResponse($result->toArray());
    }
}
