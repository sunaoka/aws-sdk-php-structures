<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel;

trait UpdateFlywheelTrait
{
    /**
     * @param UpdateFlywheelRequest $args
     * @return UpdateFlywheelResponse
     */
    public function updateFlywheel(UpdateFlywheelRequest $args)
    {
        $result = parent::updateFlywheel($args->toArray());
        return new UpdateFlywheelResponse($result->toArray());
    }
}
