<?php

namespace Sunaoka\Aws\Structures\Organizations\ListRoots;

trait ListRootsTrait
{
    /**
     * @param ListRootsRequest $args
     * @return ListRootsResponse
     */
    public function listRoots(ListRootsRequest $args)
    {
        $result = parent::listRoots($args->toArray());
        return new ListRootsResponse($result->toArray());
    }
}
