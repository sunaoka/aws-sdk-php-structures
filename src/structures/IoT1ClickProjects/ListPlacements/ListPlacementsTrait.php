<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListPlacements;

trait ListPlacementsTrait
{
    /**
     * @param ListPlacementsRequest $args
     * @return ListPlacementsResponse
     */
    public function listPlacements(ListPlacementsRequest $args)
    {
        $result = parent::listPlacements($args->toArray());
        return new ListPlacementsResponse($result->toArray());
    }
}
