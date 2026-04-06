<?php

namespace Sunaoka\Aws\Structures\Chime\UntagAttendee;

trait UntagAttendeeTrait
{
    /**
     * @param UntagAttendeeRequest $args
     * @return void
     */
    public function untagAttendee(UntagAttendeeRequest $args)
    {
        parent::untagAttendee($args->toArray());
    }
}
