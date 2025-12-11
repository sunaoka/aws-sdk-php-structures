<?php

namespace Sunaoka\Aws\Structures\Outposts\StartOutpostDecommission;

trait StartOutpostDecommissionTrait
{
    /**
     * @param StartOutpostDecommissionRequest $args
     * @return StartOutpostDecommissionResponse
     */
    public function startOutpostDecommission(StartOutpostDecommissionRequest $args)
    {
        $result = parent::startOutpostDecommission($args->toArray());
        return new StartOutpostDecommissionResponse($result->toArray());
    }
}
