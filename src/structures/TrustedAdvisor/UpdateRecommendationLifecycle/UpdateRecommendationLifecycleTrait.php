<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\UpdateRecommendationLifecycle;

trait UpdateRecommendationLifecycleTrait
{
    /**
     * @param UpdateRecommendationLifecycleRequest $args
     * @return void
     */
    public function updateRecommendationLifecycle(UpdateRecommendationLifecycleRequest $args)
    {
        parent::updateRecommendationLifecycle($args->toArray());
    }
}
