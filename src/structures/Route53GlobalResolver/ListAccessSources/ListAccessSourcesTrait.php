<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListAccessSources;

trait ListAccessSourcesTrait
{
    /**
     * @param ListAccessSourcesRequest $args
     * @return ListAccessSourcesResponse
     */
    public function listAccessSources(ListAccessSourcesRequest $args)
    {
        $result = parent::listAccessSources($args->toArray());
        return new ListAccessSourcesResponse($result->toArray());
    }
}
