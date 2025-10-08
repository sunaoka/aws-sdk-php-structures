<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroups;

trait ListAttributeGroupsTrait
{
    /**
     * @param ListAttributeGroupsRequest $args
     * @return ListAttributeGroupsResponse
     */
    public function listAttributeGroups(ListAttributeGroupsRequest $args)
    {
        $result = parent::listAttributeGroups($args->toArray());
        return new ListAttributeGroupsResponse($result->toArray());
    }
}
