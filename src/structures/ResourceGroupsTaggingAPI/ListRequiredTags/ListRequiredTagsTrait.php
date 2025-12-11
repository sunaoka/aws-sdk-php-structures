<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\ListRequiredTags;

trait ListRequiredTagsTrait
{
    /**
     * @param ListRequiredTagsRequest $args
     * @return ListRequiredTagsResponse
     */
    public function listRequiredTags(ListRequiredTagsRequest $args)
    {
        $result = parent::listRequiredTags($args->toArray());
        return new ListRequiredTagsResponse($result->toArray());
    }
}
