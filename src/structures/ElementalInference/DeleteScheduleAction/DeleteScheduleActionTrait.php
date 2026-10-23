<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteScheduleAction;

trait DeleteScheduleActionTrait
{
    /**
     * @param DeleteScheduleActionRequest $args
     * @return DeleteScheduleActionResponse
     */
    public function deleteScheduleAction(DeleteScheduleActionRequest $args)
    {
        $result = parent::deleteScheduleAction($args->toArray());
        return new DeleteScheduleActionResponse($result->toArray());
    }
}
