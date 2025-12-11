<?php

namespace Sunaoka\Aws\Structures\Ecr\RegisterPullTimeUpdateExclusion;

trait RegisterPullTimeUpdateExclusionTrait
{
    /**
     * @param RegisterPullTimeUpdateExclusionRequest $args
     * @return RegisterPullTimeUpdateExclusionResponse
     */
    public function registerPullTimeUpdateExclusion(RegisterPullTimeUpdateExclusionRequest $args)
    {
        $result = parent::registerPullTimeUpdateExclusion($args->toArray());
        return new RegisterPullTimeUpdateExclusionResponse($result->toArray());
    }
}
