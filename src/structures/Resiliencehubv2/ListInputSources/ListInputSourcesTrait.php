<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListInputSources;

trait ListInputSourcesTrait
{
    /**
     * @param ListInputSourcesRequest $args
     * @return ListInputSourcesResponse
     */
    public function listInputSources(ListInputSourcesRequest $args)
    {
        $result = parent::listInputSources($args->toArray());
        return new ListInputSourcesResponse($result->toArray());
    }
}
