<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdatePosition;

trait UpdatePositionTrait
{
    /**
     * @param UpdatePositionRequest $args
     * @return UpdatePositionResponse
     */
    public function updatePosition(UpdatePositionRequest $args)
    {
        $result = parent::updatePosition($args->toArray());
        return new UpdatePositionResponse($result->toArray());
    }
}
