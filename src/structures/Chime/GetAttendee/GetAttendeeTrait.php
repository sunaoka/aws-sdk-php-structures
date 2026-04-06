<?php

namespace Sunaoka\Aws\Structures\Chime\GetAttendee;

trait GetAttendeeTrait
{
    /**
     * @param GetAttendeeRequest $args
     * @return GetAttendeeResponse
     */
    public function getAttendee(GetAttendeeRequest $args)
    {
        $result = parent::getAttendee($args->toArray());
        return new GetAttendeeResponse($result->toArray());
    }
}
