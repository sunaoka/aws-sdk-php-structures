<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledControl;

trait UpdateEnabledControlTrait
{
    /**
     * @param UpdateEnabledControlRequest $args
     * @return UpdateEnabledControlResponse
     */
    public function updateEnabledControl(UpdateEnabledControlRequest $args)
    {
        $result = parent::updateEnabledControl($args->toArray());
        return new UpdateEnabledControlResponse($result->toArray());
    }
}
