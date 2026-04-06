<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DisassociateDeviceFromPlacement;

trait DisassociateDeviceFromPlacementTrait
{
    /**
     * @param DisassociateDeviceFromPlacementRequest $args
     * @return DisassociateDeviceFromPlacementResponse
     */
    public function disassociateDeviceFromPlacement(DisassociateDeviceFromPlacementRequest $args)
    {
        $result = parent::disassociateDeviceFromPlacement($args->toArray());
        return new DisassociateDeviceFromPlacementResponse($result->toArray());
    }
}
