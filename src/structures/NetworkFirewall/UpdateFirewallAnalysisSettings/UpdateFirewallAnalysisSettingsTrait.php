<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallAnalysisSettings;

trait UpdateFirewallAnalysisSettingsTrait
{
    /**
     * @param UpdateFirewallAnalysisSettingsRequest $args
     * @return UpdateFirewallAnalysisSettingsResponse
     */
    public function updateFirewallAnalysisSettings(UpdateFirewallAnalysisSettingsRequest $args)
    {
        $result = parent::updateFirewallAnalysisSettings($args->toArray());
        return new UpdateFirewallAnalysisSettingsResponse($result->toArray());
    }
}
