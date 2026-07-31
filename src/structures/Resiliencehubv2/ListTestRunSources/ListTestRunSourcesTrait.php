<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSources;

trait ListTestRunSourcesTrait
{
    /**
     * @param ListTestRunSourcesRequest $args
     * @return ListTestRunSourcesResponse
     */
    public function listTestRunSources(ListTestRunSourcesRequest $args)
    {
        $result = parent::listTestRunSources($args->toArray());
        return new ListTestRunSourcesResponse($result->toArray());
    }
}
