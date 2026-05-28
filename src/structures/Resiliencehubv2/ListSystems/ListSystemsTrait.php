<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystems;

trait ListSystemsTrait
{
    /**
     * @param ListSystemsRequest $args
     * @return ListSystemsResponse
     */
    public function listSystems(ListSystemsRequest $args)
    {
        $result = parent::listSystems($args->toArray());
        return new ListSystemsResponse($result->toArray());
    }
}
