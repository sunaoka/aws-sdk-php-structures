<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\AssociateDeviceWithPlacement;

trait AssociateDeviceWithPlacementTrait
{
    /**
     * @param AssociateDeviceWithPlacementRequest $args
     * @return AssociateDeviceWithPlacementResponse
     */
    public function associateDeviceWithPlacement(AssociateDeviceWithPlacementRequest $args)
    {
        $result = parent::associateDeviceWithPlacement($args->toArray());
        return new AssociateDeviceWithPlacementResponse($result->toArray());
    }
}
