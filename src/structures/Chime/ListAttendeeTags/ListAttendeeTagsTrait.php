<?php

namespace Sunaoka\Aws\Structures\Chime\ListAttendeeTags;

trait ListAttendeeTagsTrait
{
    /**
     * @param ListAttendeeTagsRequest $args
     * @return ListAttendeeTagsResponse
     */
    public function listAttendeeTags(ListAttendeeTagsRequest $args)
    {
        $result = parent::listAttendeeTags($args->toArray());
        return new ListAttendeeTagsResponse($result->toArray());
    }
}
