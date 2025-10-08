<?php

namespace Sunaoka\Aws\Structures\Organizations\ListChildren;

trait ListChildrenTrait
{
    /**
     * @param ListChildrenRequest $args
     * @return ListChildrenResponse
     */
    public function listChildren(ListChildrenRequest $args)
    {
        $result = parent::listChildren($args->toArray());
        return new ListChildrenResponse($result->toArray());
    }
}
