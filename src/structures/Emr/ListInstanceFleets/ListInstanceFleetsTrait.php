<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets;

trait ListInstanceFleetsTrait
{
    /**
     * @param ListInstanceFleetsRequest $args
     * @return ListInstanceFleetsResponse
     */
    public function listInstanceFleets(ListInstanceFleetsRequest $args)
    {
        $result = parent::listInstanceFleets($args->toArray());
        return new ListInstanceFleetsResponse($result->toArray());
    }
}
