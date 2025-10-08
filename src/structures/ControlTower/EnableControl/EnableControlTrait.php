<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableControl;

trait EnableControlTrait
{
    /**
     * @param EnableControlRequest $args
     * @return EnableControlResponse
     */
    public function enableControl(EnableControlRequest $args)
    {
        $result = parent::enableControl($args->toArray());
        return new EnableControlResponse($result->toArray());
    }
}
