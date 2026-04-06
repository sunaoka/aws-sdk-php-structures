<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\CreatePlacement;

trait CreatePlacementTrait
{
    /**
     * @param CreatePlacementRequest $args
     * @return CreatePlacementResponse
     */
    public function createPlacement(CreatePlacementRequest $args)
    {
        $result = parent::createPlacement($args->toArray());
        return new CreatePlacementResponse($result->toArray());
    }
}
