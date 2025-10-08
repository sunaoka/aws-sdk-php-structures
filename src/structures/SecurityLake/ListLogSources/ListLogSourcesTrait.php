<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListLogSources;

trait ListLogSourcesTrait
{
    /**
     * @param ListLogSourcesRequest $args
     * @return ListLogSourcesResponse
     */
    public function listLogSources(ListLogSourcesRequest $args)
    {
        $result = parent::listLogSources($args->toArray());
        return new ListLogSourcesResponse($result->toArray());
    }
}
