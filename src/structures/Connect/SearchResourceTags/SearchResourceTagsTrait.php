<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags;

trait SearchResourceTagsTrait
{
    /**
     * @param SearchResourceTagsRequest $args
     * @return SearchResourceTagsResponse
     */
    public function searchResourceTags(SearchResourceTagsRequest $args)
    {
        $result = parent::searchResourceTags($args->toArray());
        return new SearchResourceTagsResponse($result->toArray());
    }
}
