<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamGroup;

trait CreateStreamGroupTrait
{
    /**
     * @param CreateStreamGroupRequest $args
     * @return CreateStreamGroupResponse
     */
    public function createStreamGroup(CreateStreamGroupRequest $args)
    {
        $result = parent::createStreamGroup($args->toArray());
        return new CreateStreamGroupResponse($result->toArray());
    }
}
