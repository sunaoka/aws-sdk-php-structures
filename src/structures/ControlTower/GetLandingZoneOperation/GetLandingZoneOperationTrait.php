<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZoneOperation;

trait GetLandingZoneOperationTrait
{
    /**
     * @param GetLandingZoneOperationRequest $args
     * @return GetLandingZoneOperationResponse
     */
    public function getLandingZoneOperation(GetLandingZoneOperationRequest $args)
    {
        $result = parent::getLandingZoneOperation($args->toArray());
        return new GetLandingZoneOperationResponse($result->toArray());
    }
}
