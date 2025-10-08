<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListChangesets;

trait ListChangesetsTrait
{
    /**
     * @param ListChangesetsRequest $args
     * @return ListChangesetsResponse
     */
    public function listChangesets(ListChangesetsRequest $args)
    {
        $result = parent::listChangesets($args->toArray());
        return new ListChangesetsResponse($result->toArray());
    }
}
