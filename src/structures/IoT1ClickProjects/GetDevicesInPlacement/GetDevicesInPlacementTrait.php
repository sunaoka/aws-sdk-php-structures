<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\GetDevicesInPlacement;

trait GetDevicesInPlacementTrait
{
    /**
     * @param GetDevicesInPlacementRequest $args
     * @return GetDevicesInPlacementResponse
     */
    public function getDevicesInPlacement(GetDevicesInPlacementRequest $args)
    {
        $result = parent::getDevicesInPlacement($args->toArray());
        return new GetDevicesInPlacementResponse($result->toArray());
    }
}
