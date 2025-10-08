<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateFleet;

trait UpdateFleetTrait
{
    /**
     * @param UpdateFleetRequest $args
     * @return UpdateFleetResponse
     */
    public function updateFleet(UpdateFleetRequest $args)
    {
        $result = parent::updateFleet($args->toArray());
        return new UpdateFleetResponse($result->toArray());
    }
}
