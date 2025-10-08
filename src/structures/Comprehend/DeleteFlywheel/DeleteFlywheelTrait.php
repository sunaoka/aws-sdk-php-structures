<?php

namespace Sunaoka\Aws\Structures\Comprehend\DeleteFlywheel;

trait DeleteFlywheelTrait
{
    /**
     * @param DeleteFlywheelRequest $args
     * @return DeleteFlywheelResponse
     */
    public function deleteFlywheel(DeleteFlywheelRequest $args)
    {
        $result = parent::deleteFlywheel($args->toArray());
        return new DeleteFlywheelResponse($result->toArray());
    }
}
