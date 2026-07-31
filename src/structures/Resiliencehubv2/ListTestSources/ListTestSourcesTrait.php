<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestSources;

trait ListTestSourcesTrait
{
    /**
     * @param ListTestSourcesRequest $args
     * @return ListTestSourcesResponse
     */
    public function listTestSources(ListTestSourcesRequest $args)
    {
        $result = parent::listTestSources($args->toArray());
        return new ListTestSourcesResponse($result->toArray());
    }
}
