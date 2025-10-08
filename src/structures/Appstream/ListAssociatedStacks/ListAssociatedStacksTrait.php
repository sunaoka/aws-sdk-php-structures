<?php

namespace Sunaoka\Aws\Structures\Appstream\ListAssociatedStacks;

trait ListAssociatedStacksTrait
{
    /**
     * @param ListAssociatedStacksRequest $args
     * @return ListAssociatedStacksResponse
     */
    public function listAssociatedStacks(ListAssociatedStacksRequest $args)
    {
        $result = parent::listAssociatedStacks($args->toArray());
        return new ListAssociatedStacksResponse($result->toArray());
    }
}
