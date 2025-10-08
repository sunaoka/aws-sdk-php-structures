<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestions;

trait ListIngestionsTrait
{
    /**
     * @param ListIngestionsRequest $args
     * @return ListIngestionsResponse
     */
    public function listIngestions(ListIngestionsRequest $args)
    {
        $result = parent::listIngestions($args->toArray());
        return new ListIngestionsResponse($result->toArray());
    }
}
