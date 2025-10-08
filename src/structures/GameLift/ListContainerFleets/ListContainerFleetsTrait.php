<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets;

trait ListContainerFleetsTrait
{
    /**
     * @param ListContainerFleetsRequest $args
     * @return ListContainerFleetsResponse
     */
    public function listContainerFleets(ListContainerFleetsRequest $args)
    {
        $result = parent::listContainerFleets($args->toArray());
        return new ListContainerFleetsResponse($result->toArray());
    }
}
