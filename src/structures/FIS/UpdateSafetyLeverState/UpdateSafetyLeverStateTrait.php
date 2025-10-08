<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateSafetyLeverState;

trait UpdateSafetyLeverStateTrait
{
    /**
     * @param UpdateSafetyLeverStateRequest $args
     * @return UpdateSafetyLeverStateResponse
     */
    public function updateSafetyLeverState(UpdateSafetyLeverStateRequest $args)
    {
        $result = parent::updateSafetyLeverState($args->toArray());
        return new UpdateSafetyLeverStateResponse($result->toArray());
    }
}
