<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupsForEntity;

trait ListGroupsForEntityTrait
{
    /**
     * @param ListGroupsForEntityRequest $args
     * @return ListGroupsForEntityResponse
     */
    public function listGroupsForEntity(ListGroupsForEntityRequest $args)
    {
        $result = parent::listGroupsForEntity($args->toArray());
        return new ListGroupsForEntityResponse($result->toArray());
    }
}
