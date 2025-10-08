<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets;

trait ListFleetsTrait
{
    /**
     * @param ListFleetsRequest $args
     * @return ListFleetsResponse
     */
    public function listFleets(ListFleetsRequest $args)
    {
        $result = parent::listFleets($args->toArray());
        return new ListFleetsResponse($result->toArray());
    }
}
