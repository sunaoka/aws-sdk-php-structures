<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\UpdateOrganizationRecommendationLifecycle;

trait UpdateOrganizationRecommendationLifecycleTrait
{
    /**
     * @param UpdateOrganizationRecommendationLifecycleRequest $args
     * @return void
     */
    public function updateOrganizationRecommendationLifecycle(UpdateOrganizationRecommendationLifecycleRequest $args)
    {
        parent::updateOrganizationRecommendationLifecycle($args->toArray());
    }
}
