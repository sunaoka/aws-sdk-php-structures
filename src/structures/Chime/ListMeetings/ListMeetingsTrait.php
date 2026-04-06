<?php

namespace Sunaoka\Aws\Structures\Chime\ListMeetings;

trait ListMeetingsTrait
{
    /**
     * @param ListMeetingsRequest $args
     * @return ListMeetingsResponse
     */
    public function listMeetings(ListMeetingsRequest $args)
    {
        $result = parent::listMeetings($args->toArray());
        return new ListMeetingsResponse($result->toArray());
    }
}
