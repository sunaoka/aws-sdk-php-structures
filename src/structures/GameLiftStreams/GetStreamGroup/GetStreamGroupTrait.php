<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamGroup;

trait GetStreamGroupTrait
{
    /**
     * @param GetStreamGroupRequest $args
     * @return GetStreamGroupResponse
     */
    public function getStreamGroup(GetStreamGroupRequest $args)
    {
        $result = parent::getStreamGroup($args->toArray());
        return new GetStreamGroupResponse($result->toArray());
    }
}
