<?php

namespace Sunaoka\Aws\Structures\Ecr\DeregisterPullTimeUpdateExclusion;

trait DeregisterPullTimeUpdateExclusionTrait
{
    /**
     * @param DeregisterPullTimeUpdateExclusionRequest $args
     * @return DeregisterPullTimeUpdateExclusionResponse
     */
    public function deregisterPullTimeUpdateExclusion(DeregisterPullTimeUpdateExclusionRequest $args)
    {
        $result = parent::deregisterPullTimeUpdateExclusion($args->toArray());
        return new DeregisterPullTimeUpdateExclusionResponse($result->toArray());
    }
}
