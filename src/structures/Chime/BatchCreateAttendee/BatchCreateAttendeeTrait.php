<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateAttendee;

trait BatchCreateAttendeeTrait
{
    /**
     * @param BatchCreateAttendeeRequest $args
     * @return BatchCreateAttendeeResponse
     */
    public function batchCreateAttendee(BatchCreateAttendeeRequest $args)
    {
        $result = parent::batchCreateAttendee($args->toArray());
        return new BatchCreateAttendeeResponse($result->toArray());
    }
}
