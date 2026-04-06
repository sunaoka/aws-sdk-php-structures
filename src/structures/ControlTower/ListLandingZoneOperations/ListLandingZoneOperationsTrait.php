<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations;

trait ListLandingZoneOperationsTrait
{
    /**
     * @param ListLandingZoneOperationsRequest $args
     * @return ListLandingZoneOperationsResponse
     */
    public function listLandingZoneOperations(ListLandingZoneOperationsRequest $args)
    {
        $result = parent::listLandingZoneOperations($args->toArray());
        return new ListLandingZoneOperationsResponse($result->toArray());
    }
}
