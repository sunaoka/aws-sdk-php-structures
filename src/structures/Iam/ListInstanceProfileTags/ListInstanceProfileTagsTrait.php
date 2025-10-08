<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfileTags;

trait ListInstanceProfileTagsTrait
{
    /**
     * @param ListInstanceProfileTagsRequest $args
     * @return ListInstanceProfileTagsResponse
     */
    public function listInstanceProfileTags(ListInstanceProfileTagsRequest $args)
    {
        $result = parent::listInstanceProfileTags($args->toArray());
        return new ListInstanceProfileTagsResponse($result->toArray());
    }
}
