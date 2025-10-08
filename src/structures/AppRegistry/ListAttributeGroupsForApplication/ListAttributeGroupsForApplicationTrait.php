<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroupsForApplication;

trait ListAttributeGroupsForApplicationTrait
{
    /**
     * @param ListAttributeGroupsForApplicationRequest $args
     * @return ListAttributeGroupsForApplicationResponse
     */
    public function listAttributeGroupsForApplication(ListAttributeGroupsForApplicationRequest $args)
    {
        $result = parent::listAttributeGroupsForApplication($args->toArray());
        return new ListAttributeGroupsForApplicationResponse($result->toArray());
    }
}
