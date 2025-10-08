<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPosition;

trait GetPositionTrait
{
    /**
     * @param GetPositionRequest $args
     * @return GetPositionResponse
     */
    public function getPosition(GetPositionRequest $args)
    {
        $result = parent::getPosition($args->toArray());
        return new GetPositionResponse($result->toArray());
    }
}
