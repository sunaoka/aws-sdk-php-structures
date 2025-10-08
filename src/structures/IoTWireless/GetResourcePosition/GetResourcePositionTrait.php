<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourcePosition;

trait GetResourcePositionTrait
{
    /**
     * @param GetResourcePositionRequest $args
     * @return GetResourcePositionResponse
     */
    public function getResourcePosition(GetResourcePositionRequest $args)
    {
        $result = parent::getResourcePosition($args->toArray());
        return new GetResourcePositionResponse($result->toArray());
    }
}
