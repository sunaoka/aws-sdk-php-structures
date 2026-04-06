<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl;

trait GetEnabledControlTrait
{
    /**
     * @param GetEnabledControlRequest $args
     * @return GetEnabledControlResponse
     */
    public function getEnabledControl(GetEnabledControlRequest $args)
    {
        $result = parent::getEnabledControl($args->toArray());
        return new GetEnabledControlResponse($result->toArray());
    }
}
