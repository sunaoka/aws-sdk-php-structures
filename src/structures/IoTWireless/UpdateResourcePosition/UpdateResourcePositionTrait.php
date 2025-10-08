<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourcePosition;

trait UpdateResourcePositionTrait
{
    /**
     * @param UpdateResourcePositionRequest $args
     * @return UpdateResourcePositionResponse
     */
    public function updateResourcePosition(UpdateResourcePositionRequest $args)
    {
        $result = parent::updateResourcePosition($args->toArray());
        return new UpdateResourcePositionResponse($result->toArray());
    }
}
