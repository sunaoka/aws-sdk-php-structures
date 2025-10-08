<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxChangesets;

trait ListKxChangesetsTrait
{
    /**
     * @param ListKxChangesetsRequest $args
     * @return ListKxChangesetsResponse
     */
    public function listKxChangesets(ListKxChangesetsRequest $args)
    {
        $result = parent::listKxChangesets($args->toArray());
        return new ListKxChangesetsResponse($result->toArray());
    }
}
