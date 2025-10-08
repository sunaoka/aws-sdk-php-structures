<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicyTags;

trait ListPolicyTagsTrait
{
    /**
     * @param ListPolicyTagsRequest $args
     * @return ListPolicyTagsResponse
     */
    public function listPolicyTags(ListPolicyTagsRequest $args)
    {
        $result = parent::listPolicyTags($args->toArray());
        return new ListPolicyTagsResponse($result->toArray());
    }
}
