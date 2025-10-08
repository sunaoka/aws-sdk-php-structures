<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetReputationMetricsEnabled;

trait UpdateConfigurationSetReputationMetricsEnabledTrait
{
    /**
     * @param UpdateConfigurationSetReputationMetricsEnabledRequest $args
     * @return void
     */
    public function updateConfigurationSetReputationMetricsEnabled(UpdateConfigurationSetReputationMetricsEnabledRequest $args)
    {
        parent::updateConfigurationSetReputationMetricsEnabled($args->toArray());
    }
}
