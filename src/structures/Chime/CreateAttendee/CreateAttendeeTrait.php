<?php

namespace Sunaoka\Aws\Structures\Chime\CreateAttendee;

trait CreateAttendeeTrait
{
    /**
     * @param CreateAttendeeRequest $args
     * @return CreateAttendeeResponse
     */
    public function createAttendee(CreateAttendeeRequest $args)
    {
        $result = parent::createAttendee($args->toArray());
        return new CreateAttendeeResponse($result->toArray());
    }
}
