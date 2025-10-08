<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateFlywheel;

trait CreateFlywheelTrait
{
    /**
     * @param CreateFlywheelRequest $args
     * @return CreateFlywheelResponse
     */
    public function createFlywheel(CreateFlywheelRequest $args)
    {
        $result = parent::createFlywheel($args->toArray());
        return new CreateFlywheelResponse($result->toArray());
    }
}
