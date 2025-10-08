<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheels;

trait ListFlywheelsTrait
{
    /**
     * @param ListFlywheelsRequest $args
     * @return ListFlywheelsResponse
     */
    public function listFlywheels(ListFlywheelsRequest $args)
    {
        $result = parent::listFlywheels($args->toArray());
        return new ListFlywheelsResponse($result->toArray());
    }
}
