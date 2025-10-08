<?php

namespace Sunaoka\Aws\Structures\Iam\ListUserTags;

trait ListUserTagsTrait
{
    /**
     * @param ListUserTagsRequest $args
     * @return ListUserTagsResponse
     */
    public function listUserTags(ListUserTagsRequest $args)
    {
        $result = parent::listUserTags($args->toArray());
        return new ListUserTagsResponse($result->toArray());
    }
}
