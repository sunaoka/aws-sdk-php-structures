<?php

namespace Sunaoka\Aws\Structures\ControlTower\DisableControl;

trait DisableControlTrait
{
    /**
     * @param DisableControlRequest $args
     * @return DisableControlResponse
     */
    public function disableControl(DisableControlRequest $args)
    {
        $result = parent::disableControl($args->toArray());
        return new DisableControlResponse($result->toArray());
    }
}
