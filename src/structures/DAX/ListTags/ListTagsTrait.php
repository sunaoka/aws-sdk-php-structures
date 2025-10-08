<?php

namespace Sunaoka\Aws\Structures\DAX\ListTags;

trait ListTagsTrait
{
    /**
     * @param ListTagsRequest $args
     * @return ListTagsResponse
     */
    public function listTags(ListTagsRequest $args)
    {
        $result = parent::listTags($args->toArray());
        return new ListTagsResponse($result->toArray());
    }
}
