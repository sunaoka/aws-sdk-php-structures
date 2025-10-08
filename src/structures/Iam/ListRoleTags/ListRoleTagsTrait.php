<?php

namespace Sunaoka\Aws\Structures\Iam\ListRoleTags;

trait ListRoleTagsTrait
{
    /**
     * @param ListRoleTagsRequest $args
     * @return ListRoleTagsResponse
     */
    public function listRoleTags(ListRoleTagsRequest $args)
    {
        $result = parent::listRoleTags($args->toArray());
        return new ListRoleTagsResponse($result->toArray());
    }
}
