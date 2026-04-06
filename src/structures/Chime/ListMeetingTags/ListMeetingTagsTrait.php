<?php

namespace Sunaoka\Aws\Structures\Chime\ListMeetingTags;

trait ListMeetingTagsTrait
{
    /**
     * @param ListMeetingTagsRequest $args
     * @return ListMeetingTagsResponse
     */
    public function listMeetingTags(ListMeetingTagsRequest $args)
    {
        $result = parent::listMeetingTags($args->toArray());
        return new ListMeetingTagsResponse($result->toArray());
    }
}
