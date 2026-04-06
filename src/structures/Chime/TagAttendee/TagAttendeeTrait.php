<?php

namespace Sunaoka\Aws\Structures\Chime\TagAttendee;

trait TagAttendeeTrait
{
    /**
     * @param TagAttendeeRequest $args
     * @return void
     */
    public function tagAttendee(TagAttendeeRequest $args)
    {
        parent::tagAttendee($args->toArray());
    }
}
