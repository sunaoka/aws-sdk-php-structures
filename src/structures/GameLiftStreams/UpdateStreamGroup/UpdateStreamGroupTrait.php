<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup;

trait UpdateStreamGroupTrait
{
    /**
     * @param UpdateStreamGroupRequest $args
     * @return UpdateStreamGroupResponse
     */
    public function updateStreamGroup(UpdateStreamGroupRequest $args)
    {
        $result = parent::updateStreamGroup($args->toArray());
        return new UpdateStreamGroupResponse($result->toArray());
    }
}
