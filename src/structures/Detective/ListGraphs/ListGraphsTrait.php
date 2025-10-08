<?php

namespace Sunaoka\Aws\Structures\Detective\ListGraphs;

trait ListGraphsTrait
{
    /**
     * @param ListGraphsRequest $args
     * @return ListGraphsResponse
     */
    public function listGraphs(ListGraphsRequest $args)
    {
        $result = parent::listGraphs($args->toArray());
        return new ListGraphsResponse($result->toArray());
    }
}
