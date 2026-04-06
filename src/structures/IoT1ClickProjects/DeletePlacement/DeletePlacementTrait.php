<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DeletePlacement;

trait DeletePlacementTrait
{
    /**
     * @param DeletePlacementRequest $args
     * @return DeletePlacementResponse
     */
    public function deletePlacement(DeletePlacementRequest $args)
    {
        $result = parent::deletePlacement($args->toArray());
        return new DeletePlacementResponse($result->toArray());
    }
}
