<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\UpdateReward;

trait UpdateRewardTrait
{
    /**
     * @param UpdateRewardRequest $args
     * @return UpdateRewardResponse
     */
    public function updateReward(UpdateRewardRequest $args)
    {
        $result = parent::updateReward($args->toArray());
        return new UpdateRewardResponse($result->toArray());
    }
}
