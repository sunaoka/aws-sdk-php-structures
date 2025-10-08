<?php

namespace Sunaoka\Aws\Structures\Organizations\ListParents;

trait ListParentsTrait
{
    /**
     * @param ListParentsRequest $args
     * @return ListParentsResponse
     */
    public function listParents(ListParentsRequest $args)
    {
        $result = parent::listParents($args->toArray());
        return new ListParentsResponse($result->toArray());
    }
}
