<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppInputSources;

trait ListAppInputSourcesTrait
{
    /**
     * @param ListAppInputSourcesRequest $args
     * @return ListAppInputSourcesResponse
     */
    public function listAppInputSources(ListAppInputSourcesRequest $args)
    {
        $result = parent::listAppInputSources($args->toArray());
        return new ListAppInputSourcesResponse($result->toArray());
    }
}
