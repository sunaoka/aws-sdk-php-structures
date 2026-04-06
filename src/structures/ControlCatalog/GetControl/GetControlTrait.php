<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl;

trait GetControlTrait
{
    /**
     * @param GetControlRequest $args
     * @return GetControlResponse
     */
    public function getControl(GetControlRequest $args)
    {
        $result = parent::getControl($args->toArray());
        return new GetControlResponse($result->toArray());
    }
}
