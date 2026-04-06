<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateIntegration;

trait UpdateIntegrationTrait
{
    /**
     * @param UpdateIntegrationRequest $args
     * @return void
     */
    public function updateIntegration(UpdateIntegrationRequest $args)
    {
        parent::updateIntegration($args->toArray());
    }
}
