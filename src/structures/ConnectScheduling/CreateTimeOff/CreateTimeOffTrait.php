<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\CreateTimeOff;

trait CreateTimeOffTrait
{
    /**
     * @param CreateTimeOffRequest $args
     * @return CreateTimeOffResponse
     */
    public function createTimeOff(CreateTimeOffRequest $args)
    {
        $result = parent::createTimeOff($args->toArray());
        return new CreateTimeOffResponse($result->toArray());
    }
}
