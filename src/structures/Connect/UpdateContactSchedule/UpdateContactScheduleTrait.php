<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactSchedule;

trait UpdateContactScheduleTrait
{
    /**
     * @param UpdateContactScheduleRequest $args
     * @return UpdateContactScheduleResponse
     */
    public function updateContactSchedule(UpdateContactScheduleRequest $args)
    {
        $result = parent::updateContactSchedule($args->toArray());
        return new UpdateContactScheduleResponse($result->toArray());
    }
}
