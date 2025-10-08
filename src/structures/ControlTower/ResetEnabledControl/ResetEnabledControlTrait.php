<?php

namespace Sunaoka\Aws\Structures\ControlTower\ResetEnabledControl;

trait ResetEnabledControlTrait
{
    /**
     * @param ResetEnabledControlRequest $args
     * @return ResetEnabledControlResponse
     */
    public function resetEnabledControl(ResetEnabledControlRequest $args)
    {
        $result = parent::resetEnabledControl($args->toArray());
        return new ResetEnabledControlResponse($result->toArray());
    }
}
