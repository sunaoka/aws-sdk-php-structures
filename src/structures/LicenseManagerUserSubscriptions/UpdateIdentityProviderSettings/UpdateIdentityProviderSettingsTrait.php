<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings;

trait UpdateIdentityProviderSettingsTrait
{
    /**
     * @param UpdateIdentityProviderSettingsRequest $args
     * @return UpdateIdentityProviderSettingsResponse
     */
    public function updateIdentityProviderSettings(UpdateIdentityProviderSettingsRequest $args)
    {
        $result = parent::updateIdentityProviderSettings($args->toArray());
        return new UpdateIdentityProviderSettingsResponse($result->toArray());
    }
}
