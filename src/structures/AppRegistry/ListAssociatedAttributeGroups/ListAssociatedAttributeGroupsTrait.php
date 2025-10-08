<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAssociatedAttributeGroups;

trait ListAssociatedAttributeGroupsTrait
{
    /**
     * @param ListAssociatedAttributeGroupsRequest $args
     * @return ListAssociatedAttributeGroupsResponse
     */
    public function listAssociatedAttributeGroups(ListAssociatedAttributeGroupsRequest $args)
    {
        $result = parent::listAssociatedAttributeGroups($args->toArray());
        return new ListAssociatedAttributeGroupsResponse($result->toArray());
    }
}
