<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdatePlacement;

trait UpdatePlacementTrait
{
    /**
     * @param UpdatePlacementRequest $args
     * @return UpdatePlacementResponse
     */
    public function updatePlacement(UpdatePlacementRequest $args)
    {
        $result = parent::updatePlacement($args->toArray());
        return new UpdatePlacementResponse($result->toArray());
    }
}
