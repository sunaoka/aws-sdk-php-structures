<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableAllowedImagesSettings;

trait DisableAllowedImagesSettingsTrait
{
    /**
     * @param DisableAllowedImagesSettingsRequest $args
     * @return DisableAllowedImagesSettingsResponse
     */
    public function disableAllowedImagesSettings(DisableAllowedImagesSettingsRequest $args)
    {
        $result = parent::disableAllowedImagesSettings($args->toArray());
        return new DisableAllowedImagesSettingsResponse($result->toArray());
    }
}
